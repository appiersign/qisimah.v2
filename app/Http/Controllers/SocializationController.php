<?php

namespace App\Http\Controllers;

use App\Google;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocializationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function linkYoutubeAccount()
    {
        return Google::login();
    }

    public function handleGoogleAuthentication(Request $request)
    {
        $user = User::find(Auth::id());
        $google = new Google();
        $code = $request->get('code');
        $google->updateUserGoogleAuthCode($user, $code);
        return $this->getGoogleAccessToken($google, $user, $code);
    }

    public function getGoogleAccessToken(Google $google, $user, $code)
    {
        $headers = [];
        $url = "https://www.googleapis.com/oauth2/v4/token?code=$code&client_id=744307183277-du6f030bialb2cnnqfg45549tikcnrhq.apps.googleusercontent.com&client_secret=Svenu57nqcp5n5l6fNn2CcPb&redirect_uri=http://localhost:8000/3rd-party/auth/google&grant_type=authorization_code";
        $response = $google->sendRequest($url, $headers, '');

        return $google->updateUserAccessTokenAndRefreshToken($user, $response);
    }

    public function linkInstagramAccount()
    {
        return redirect()->to('https://api.instagram.com/oauth/authorize/?client_id='.env('INSTAGRAM_CLIENT_ID').'&redirect_uri=http://localhost:8000/hooks/instagram/auth&response_type=code&state='.csrf_token().'&scope=basic+public_content');
    }
}
