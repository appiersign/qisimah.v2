<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Google;
use App\User;
use App\YouTube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistsYoutubeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $artist_qisimah_id
     * @return \Illuminate\Http\Response
     */
    public function index(string $artist_qisimah_id)
    {
        try {
            $artist = Artist::with(['youtube.videos'])
                ->where('qisimah_id', $artist_qisimah_id)
                ->first();
            if (is_null($artist)) {
                throw new \Exception('Artist does not exist!');
            }
            $user = Auth::user();
            $videos = $artist->videos()->paginate(20);
            $youtube = $artist->youtube;
            $media = [];
            session()->flash('tab', 'youtube');
            return view('pages.index', compact('user', 'artist', 'videos', 'youtube', 'media'));
        } catch (\Exception $exception) {
            session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param string $artist_qisimah_id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(string $artist_qisimah_id)
    {
        return Google::login($artist_qisimah_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function handleYoutubeLoginResponse(Request $request)
    {
        try {
            $state = explode('-', $request->get('state'));
            if (csrf_token() <> $state[0]) {
                throw new \Exception('Session Expired please try again!');
            }

            $artist = Artist::with([])->where('qisimah_id', $state[1])->first();
            if (is_null($artist)) {
                throw new \Exception('Artist does not exist!');
            }

            $code = $request->get('code');
            $artist->google_auth_code = $code;
            $artist->setGoogleAccessAndRefreshToken();

            if (strlen($artist->google_access_token) === 0) {
                throw new \Exception('We could not connect youtube. Please try again!');
            }
            (new YouTube)->getData($artist);
        } catch (\Exception $exception) {
            logger($exception);
            session()->flash('error', $exception->getMessage());
            return redirect()->route('artists.index');
        }
        return redirect()->route('artists.youtube.index', ['artist_qisimah_id' => $artist->qisimah_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
