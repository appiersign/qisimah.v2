<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class YouTube extends Model
{
    protected $fillable = ['etag', 'channel_id', 'artist_id', 'title', 'description', 'published_at', 'avatar', 'views', 'subscribers', 'last_request'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function getLastRequestAttribute()
    {
        return Carbon::parse($this->attributes['last_request']);
    }

    /**
     * @param Artist $artist
     * @return array
     */
    public function getData(Artist $artist): array
    {
        if ($artist->google_access_token) {
            $data = $artist->youtube()->first();
            if (is_null($data)){
                $youtube_data = $this->fetch($artist);
                $youtube = new YouTube($youtube_data);
                $youtube->save();
                $youtube->fetchChannelActivity();
                $youtube->fetchVideoStats();
            } elseif ($data->last_request->diffInMinutes(Carbon::now()) > 30) {
                $artist->youtube->fetchVideoStats();
                return $artist->youtube->refreshYoutubeData();
            }

            return $artist->youtube()->first()->toArray();
        }
        return [];

    }

    public function refreshYoutubeData()
    {
        $youtube_data = $this->fetch($this->artist);
        $this->artist->youtube()->first()->update($youtube_data);
        return $youtube_data;
    }

    public function fetch(Artist $artist)
    {
        $google = new Google();
        $youtube_data = [];
        $response = $google->getYouTubeChannelData($artist);

        $date = Carbon::parse($response['items'][0]['snippet']["publishedAt"]);
        $youtube_data['etag'] = $response['etag'];
        $youtube_data['channel_id'] = $response['items'][0]['id'];
        $youtube_data['title'] = $response['items'][0]['snippet']['title'];
        $youtube_data["description"] = $response['items'][0]['snippet']["description"];
        $youtube_data["published_at"] = $date->toDateTimeString();
        $youtube_data["avatar"] = $response['items'][0]['snippet']["thumbnails"]["medium"]["url"];
        $youtube_data["views"] = $response['items'][0]["statistics"]["viewCount"];
        $youtube_data["subscribers"] = $response['items'][0]["statistics"]["subscriberCount"];
        $youtube_data['last_request'] = Carbon::now()->toDateTimeString();
        $youtube_data["artist_id"] = (int) $artist->id;
        $youtube_data['last_request'] = Carbon::now()->toDateTimeString();

        return $youtube_data;
    }

    public function fetchChannelActivity()
    {
        $this->getChannelActivities();
    }

    public function getChannelActivities()
    {
        $url = "https://www.googleapis.com/youtube/v3/activities?mine=true&part=snippet,contentDetails&maxResults=50";
        $headers = [
            'Authorization: Bearer '. $this->artist->google_access_token
        ];
        $response = (new Google)->sendRequest($url, $headers, '', 'GET');

        $results = $this->handleGetChannelActivities($response);

        if (count($results[1])){
            $this->artist->videos()->sync($results[1]);
        }
        return $results[0];
    }

    public function handleGetChannelActivities($response): array
    {
        $_response = json_decode($response, 1);
        $video_ids = [];
        $ids = [];
        if (isset($_response['items'])){
            $activities = $_response['items'];
            if (count($activities)){
                foreach ($activities as $activity) {
                    if ($activity['snippet']['type'] === 'upload'){
                        $video_exists = Video::where('video_id', $activity['contentDetails']['upload']['videoId'])->first();
                        if ($video_exists){
                            array_push($ids, $video_exists->id);
                        } else {
                            $video = [];
                            $video['qisimah_id']    = str_random();
                            $video['published_at']  = $activity['snippet']['publishedAt'];
                            $video['title']         = $activity['snippet']['title'];
                            $video['description']   = $activity['snippet']['description'];
                            $video['channel_id']    = $activity['snippet']['channelId'];
                            $video['thumbnail_medium']  = $activity['snippet']['thumbnails']['medium']['url'];
                            $video['thumbnail_default'] = $activity['snippet']['thumbnails']['default']['url'];
                            $video['thumbnail_standard'] = $activity['snippet']['thumbnails']['standard']['url'];
                            $video['thumbnail_high']    = $activity['snippet']['thumbnails']['high']['url'];
                            $video['thumbnail_maxres']  = $activity['snippet']['thumbnails']['maxres']['url'];
                            $video['video_id']          = $activity['contentDetails']['upload']['videoId'];

                            $created = Video::create($video);

                            if ($created){
                                array_push($ids, $created->id);
                            }
                        }
                        array_push($video_ids, $activity['contentDetails']['upload']['videoId']);
                    }
                }
            }
        }
        return [$video_ids, $ids];
    }

    public function fetchVideoStats()
    {
        $google = new Google();
        $google->getYoutubeVideoData($this->artist);
        $this->likes      = (int) $this->artist->videos()->sum('likes');
        $this->favorites  = (int) $this->artist->videos()->sum('favorites');
        $this->save();
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'channel_id', 'channel_id');
    }
}
