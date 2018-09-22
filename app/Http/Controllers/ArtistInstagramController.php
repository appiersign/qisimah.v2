<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistInstagramController extends Controller
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
            $artist = Artist::with('instagram')
                ->where('qisimah_id', $artist_qisimah_id)
                ->first();
            if (is_null($artist)) {
                throw new \Exception('Artist does not exist!');
            }
            $instagram = $artist->instagram;
            $media = $instagram->media()->paginate(10);
            $user = Auth::user();
            session()->put('tab', 'instagram');
            return view('pages.index', compact('user', 'artist', 'media', 'instagram', 'media'));
        } catch (\Exception $exception) {
            session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param string $artist_qisimah_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(string $artist_qisimah_id)
    {
        try {
            $artist = Artist::with([])->where('qisimah_id', $artist_qisimah_id)->first();
            if (is_null($artist)){
                throw new \Exception('Artist does not exist!');
            }
            return redirect()->to('https://api.instagram.com/oauth/authorize/?client_id='.env('INSTAGRAM_CLIENT_ID').'&redirect_uri='.env('INSTAGRAM_REDIRECT_URI').'?tag='.Auth::user()->qisimah_id.'-'.$artist_qisimah_id.'&response_type=code&state='.csrf_token().'&scope=basic+public_content');
        } catch (\Exception $exception) {
            session()->flash('error', 'Something went wrong. Please try again later!');
            return back();
        }
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
