<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'showRequestArtistForm', 'handleSearchArtistForm', 'handleArtistManagementDetails');
    }

    public function showRequestArtistForm($artist = '')
    {
        $artists = [];
        if ($artist){
            $artists = Artist::where('search_box', 'LIKE', "%".strtolower($artist)."%")->get();
        }
        return view('pages.artists.request', compact('artists'));
    }

    public function handleSearchArtistForm(Request $request)
    {
        return redirect()->to('artists/request.do/'.$request->input('artist'));
    }

    public function handleArtistManagementDetails($qisimah_id)
    {
        $artist = Artist::where('qisimah_id', $qisimah_id)->first();
        if (is_null($artist)){
            return view('pages.artists.management-details')->with('errors', 'Bad Request');
        }
        return view('pages.artists.management-details', compact('artist'));
    }
}
