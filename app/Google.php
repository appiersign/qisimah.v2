<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use WebDriver\Log;

class Google extends Model
{
    private $redirect_uri;
    private $client_id;
    private $client_secret;

    public function __construct()
    {
        $this->client_id = env('GOOGLE_ACCOUNT_CLIENT_ID');
        $this->client_secret = env('GOOGLE_ACCOUNT_CLIENT_SECRET');
        $this->redirect_uri = env('GOOGLE_ACCOUNT_REDIRECT_URL');
    }

    /**
     * @param string $artist_qisimah_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public static function login(string $artist_qisimah_id)
    {
        return redirect('https://accounts.google.com/o/oauth2/v2/auth?response_type=code&scope=https://www.googleapis.com/auth/youtube&redirect_uri='.env('GOOGLE_ACCOUNT_REDIRECT_URL').'&client_id='.env('GOOGLE_ACCOUNT_CLIENT_ID').'&include_granted_scopes=true&access_type=offline&prompt=consent&state='.csrf_token().'-'.$artist_qisimah_id);
    }

    /**
     * @param Artist $artist
     * @param $code
     * @return bool
     */
    public function updateUserGoogleAuthCode(Artist $artist, $code)
    {
        $artist->google_auth_code = $code;
        return $artist->save();
    }

    public function sendRequest($url, $headers, $fields, $method = 'POST')
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        if ($method === 'POST') {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
        }

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        return curl_exec($curl);
    }

    public function updateArtistAccessTokenAndRefreshToken(Artist $artist, $response)
    {
        $_response = json_decode($response, 1);
        if (!isset($_response['access_token'])){
            \session()->flash('error', 'We could not link YouTube account at this time, please try again!');
        } else {
            $artist->google_access_token = $_response['access_token'];
            $artist->google_refresh_token = $_response['refresh_token'];

            if ($artist->save()) {
                return true;
            } else {
                return false;
            }
        }

        return $this->refreshAccessToken($artist);
    }

    public function getYouTubeChannelData(Artist $artist)
    {
        $url = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&mine=true';
        $headers = [
            'Authorization: Bearer '. $artist->google_access_token
        ];

        $response = json_decode($this->sendRequest($url, $headers, '', 'GET'), 1);

        if (isset($response['error']['message']) && $response['error']['message'] === 'Invalid Credentials') {
            $access_token = $this->refreshAccessToken($artist);

            if ($access_token){
                $headers = [ 'Authorization: Bearer '. $access_token ];
                return json_decode($this->sendRequest($url, $headers, '', 'GET'), 1);
            }
        }
        return $response;
    }

    public function getYoutubeChannelActivities(Artist $artist)
    {
        $url = "https://www.googleapis.com/youtube/v3/activities?mine=true&part=snippet,contentDetails&maxResults=50";
        $headers = [
            'Authorization: Bearer '. $artist->google_access_token
        ];
        $response = $this->sendRequest($url, $headers, '', 'GET');

        $results = $this->handleGetYoutubeChannelActivities($response);

        if (count($results[1])){
            $artist->videos()->sync($results[1]);
        }
        return $results[0];
    }

    public function getYoutubeVideoData(Artist $artist): int
    {
//        $this->refreshAccessToken($artist);
        $number_of_videos = 0;
        $ids = implode(',', $artist->videos()->pluck('videos.video_id')->toArray());
        $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=$ids";
        $headers = [
            'Authorization: Bearer '. $artist->google_access_token
        ];
        $response = json_decode($this->sendRequest($url, $headers, '', 'GET'), 1);
        if (isset($response['items'])){
            $videos = $response['items'];
            $number_of_videos = count($videos);
            if ($number_of_videos) {
                foreach ($videos as $video) {
                    $_video = Video::where('video_id', $video['id'])->first();
                    if (!is_null($_video)){
                        $_video->likes      = $video['statistics']['likeCount'];
                        $_video->dislikes   = $video['statistics']['dislikeCount'];
                        $_video->comments   = $video['statistics']['commentCount'];
                        $_video->favorites  = $video['statistics']['favoriteCount'];
                        $_video->favorites  = $video['statistics']['favoriteCount'];
                        $_video->views      = $video['statistics']['viewCount'];
                        $_video->save();
                    }
                }
            }
        }
        return $number_of_videos;
    }

    public function refreshAccessToken(Artist $artist)
    {
        $refresh_token = $artist->google_refresh_token;
        $url = "https://www.googleapis.com/oauth2/v4/token";
        $fields = "client_id=$this->client_id&client_secret=$this->client_secret&redirect_uri=$this->redirect_uri&grant_type=refresh_token&refresh_token=$refresh_token";

        $response = json_decode($this->sendRequest($url, [], $fields), 1);

        if (isset($response['access_token'])){
            $artist->google_access_token = $response["access_token"];
            $artist->save();
            return $response['access_token'];
        }
        return false;
    }
}
