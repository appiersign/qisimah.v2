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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::with('artist')->get();
        return view('pages.songs.index', compact('songs'));
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

    /**
     * @param StoreMetadataRequest $request
     * @param string $qisimah_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeMetaData(StoreMetadataRequest $request, string $qisimah_id)
    {
        $song = Song::where('qisimah_id', $qisimah_id)
            ->where('user_id', Auth::id())
            ->first();
        if ($song){
            return $this->handleSaveMetadata($request, $song);
        }
        session()->flash('error', 'Sorry you cannot update metadata. This may be due to non-existence of song or your not authorized to do so!');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param Song $song
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleSaveMetadata(Request $request, Song $song)
    {
        return $song
            ->setTitle($request->title)
            ->setVersion($request->version)
            ->setAlbumId($request->album)
            ->setArtist($request->artist)
            ->setLabel($request->label)
            ->setProducers($request->producers)
            ->setGenres($request->genres)
            ->setFeatured($request->featured)
            ->setReleaseDate($request->release)
            ->setCoverArt($request)
            ->saveMetadata();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $song = Song::with('artist', 'label', 'album')->find($id);
        return view('pages.songs.show', compact('song'));
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
