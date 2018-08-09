<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Genre;
use App\Http\Requests\StoreMetadataRequest;
use App\Http\Requests\UploadSongRequest;
use App\Label;
use App\Producer;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.songs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UploadSongRequest $request
     * @return string
     */
    public function store(UploadSongRequest $request)
    {
        return (new Song())->setFile($request)->upload();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createMetaData($qisimah_id)
    {
        $song = Song::where('qisimah_id', $qisimah_id)->first();
        $artists = Artist::all();
        $genres = Genre::all();
        $producers = Producer::all();
        $albums = Album::all();
        $labels = Label::all();
        return view('pages.songs.metadata', compact('song', 'artists', 'genres', 'producers', 'albums', 'labels'));
    }

    public function storeMetaData(StoreMetadataRequest $request, string $qisimah_id)
    {
        $song = Song::where('qisimah_id', $qisimah_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($song){
            return $song;
        }

        session()->flash('error', 'Sorry you cannot update metadata. This may be due to non-existence of song or your not authorized to do so!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.songs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
