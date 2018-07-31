<?php

namespace App\Http\Controllers;

use App\User;
use App\YouTube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function dashboard()
    {
        $user    = User::find(Auth::id());
        $youtube = YouTube::getYouTubeData($user);
        $videos  = $user->videos()->orderBy('views', 'desc')->limit(20)->get();
        $instagram = $user->getInstagramProfile();
        return view('pages.index', compact('user', 'youtube', 'videos', 'instagram'));
    }

    public function goolgeLogin(Request $request)
    {
        if ($request->has('code')){
            $user = User::find(Auth::id());
            $user->google_code = $request->get('code');
            if ($user->save()) {
                Session::flush('success', 'YouTube Link Successful');
            } else {
                Session::flush('failed', 'User records could be updated. Please try connecting your account later');
            }
        } else {
            Session::flush('failed', 'Access denied. Please make sure you enter the right credentials!');
        }

        return redirect()->to('/');
    }
}
