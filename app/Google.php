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
        $this->client_id = '744307183277-du6f030bialb2cnnqfg45549tikcnrhq.apps.googleusercontent.com';
        $this->client_secret = 'Svenu57nqcp5n5l6fNn2CcPb';
        $this->redirect_uri = 'http://localhost:8000/3rd-party/auth/google';
    }

    public static function login()
    {
        return redirect('https://accounts.google.com/o/oauth2/v2/auth?response_type=code&scope=https://www.googleapis.com/auth/youtubepartner&redirect_uri=http://localhost:8000/3rd-party/auth/google&client_id=744307183277-du6f030bialb2cnnqfg45549tikcnrhq.apps.googleusercontent.com&include_granted_scopes=true&access_type=offline&prompt=consent');
    }

    public function updateUserGoogleAuthCode(User $user, $code)
    {
        $user->google_auth_code = $code;
        return $user->save();
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

    public function updateUserAccessTokenAndRefreshToken(User $user, $response)
    {
        $_response = json_decode($response, 1);
        if (!isset($_response['access_token'])){
            Session::flush('failed', 'We could not link YouTube account at this time, please try again!');
        } else {
            $user->google_access_token = $_response['access_token'];
            $user->google_refresh_token = $_response['refresh_token'];

            if ($user->save()) {
                Session::flush('success', 'You have linked your YouTube account!');
            } else {
                Session::flush('failed', 'We could not link YouTube account at this time, please try again!');
            }
        }

        Auth::loginUsingId($user->id);

        return redirect()->to('artists');
    }

    public function getYouTubeChannelData(User $user)
    {
        $url = 'https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails,statistics&mine=true';
        $headers = [
            'Authorization: Bearer '. $user->google_access_token
        ];

        $response = json_decode($this->sendRequest($url, $headers, '', 'GET'), 1);

        \Illuminate\Support\Facades\Log::info('response from get you tube data');
        \Illuminate\Support\Facades\Log::debug($response);

        if (isset($response['error']['message']) && $response['error']['message'] === 'Invalid Credentials') {
            $access_token = $this->refreshAccessToken($user);

            \Illuminate\Support\Facades\Log::debug($access_token);
            if ($access_token){
                $headers = [ 'Authorization: Bearer '. $access_token ];
                return json_decode($this->sendRequest($url, $headers, '', 'GET'), 1);
            }
        }
        return $response;
    }

    public function refreshAccessToken(User $user)
    {
        $refresh_token = $user->google_refresh_token;
        $url = "https://www.googleapis.com/oauth2/v4/token";
        $fields = "client_id=$this->client_id&client_secret=$this->client_secret&redirect_uri=$this->redirect_uri&grant_type=refresh_token&refresh_token=$refresh_token";

        $response = json_decode($this->sendRequest($url, [], $fields), 1);

        if (isset($response['access_token'])){
            $user->google_access_token = $response["access_token"];
            $user->save();
            return $response['access_token'];
        }
        return false;
    }
}
