<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class YouTube extends Model
{
    protected $fillable = ['etag', 'channel_id', 'user_id', 'title', 'description', 'published_at', 'avatar', 'views', 'subscribers', 'last_request'];

    public function getLastRequestAttribute()
    {
        return Carbon::parse($this->attributes['last_request']);
    }

    public static function getYouTubeData(User $user): array
    {
        if ($user->google_access_token) {
            $data = $user->youtube()->first();
            if (is_null($data)){
                $youtube_data = self::fetch($user);
                self::create($youtube_data);
                return $youtube_data;
            } elseif ($data->last_request->diffInMinutes(Carbon::now()) > 30) {
                return self::refreshYoutubeData($user);
            }

            return $user->youtube()->first()->toArray();
        }
        return [];

    }

    public static function refreshYoutubeData(User $user)
    {
        $youtube_data = self::fetch($user);
        $user->youtube()->first()->update($youtube_data);
        return $youtube_data;
    }

    public static function fetch(User $user)
    {
        $google = new Google();
        $youtube_data = [];
        $response = $google->getYouTubeChannelData($user);

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
        $youtube_data["user_id"] = (int) $user->id;
        $youtube_data['last_request'] = Carbon::now()->toDateTimeString();

        return $youtube_data;
    }

    public static function fetchChannelActivity($user)
    {
        $google = new Google();
        return $google->getYoutubeChannelActivities($user);
    }

    public static function fetchVideoStats($user)
    {
        $google = new Google();
        return $google->getYoutubeVideoData($user, self::fetchChannelActivity($user));
    }
}
