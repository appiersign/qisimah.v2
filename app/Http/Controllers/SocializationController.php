<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Google;
use App\Instagram;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocializationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('handleInstagramAuthentication', 'handleGoogleAuthentication');
    }

    public function linkYoutubeAccount()
    {
        return Google::login();
    }

    public function handleGoogleAuthentication(Request $request)
    {
        logger($request->all());
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

    public function handleInstagramAuthentication(Request $request)
    {
        try {
            $qisimah_data = explode('-', $request->get('tag'));
            $user = User::where('qisimah_id', $qisimah_data[0])->first();
            $artist = Artist::where('qisimah_id', $qisimah_data[1])->first();

            if (is_null($user)){
                throw new \Exception('Suspicious login detected');
            }

            if (is_null($artist)){
                throw new \Exception('Artist not found!');
            }

            return (new Instagram)->handleInstagramAuthentication($request, $user, $artist);
        } catch (\Exception $exception) {
            session()->flash('error', $exception->getMessage());
            return url('');
        }
    }
}
