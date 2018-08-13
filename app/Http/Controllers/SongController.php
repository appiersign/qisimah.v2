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
        $songs = Song::with('artist')->simplePaginate(2);
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
    public function storeMetaData(StoreMetadataRequest $request, string $qisimah_id, bool $update = false)
    {
        $song = Song::where('qisimah_id', $qisimah_id)
            ->where('user_id', Auth::id())
            ->first();
        if ($song){
            return $this->handleSaveMetadata($request, $song, $update);
        }
        session()->flash('error', 'Sorry you cannot update metadata. This may be due to non-existence of song or your not authorized to do so!');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @param Song $song
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleSaveMetadata(Request $request, Song $song, bool $update = false)
    {
        return $song
            ->setTitle($request->title)
            ->setVersion($request->version)
            ->setAlbumId($request->album)
            ->setArtist($request->artist)
            ->setLabel($request->label)
            ->setProducers($request->producers, $update)
            ->setGenres($request->genres, $update)
            ->setFeatured($request->input('featured', []), $update)
            ->setReleaseDate($request->release)
            ->setCoverArt($request, $update)
            ->saveMetadata($update, $song->qisimah_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(string $qisimah_id)
    {
        $song = Song::with('artist', 'label', 'album')->where('qisimah_id', $qisimah_id)->first();
        return view('pages.songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(string $qisimah_id)
    {
        $song = Song::with('producers', 'label', 'artist', 'featured', 'genres')->where('qisimah_id', $qisimah_id)->first();
        if ($song){
            $artists = Artist::orderBy('nick_name', 'asc')->get();
            $labels  = Label::orderby('name')->get();
            $genres = Genre::orderBy('name')->get();
            $albums = Album::orderBy('title')->get();
            $producers = Producer::orderBy('nick_name')->get();
            return view('pages.songs.update-metadata', compact('producers', 'song', 'artists', 'genres', 'albums', 'labels'));
        }

        session()->flash('error', 'Song could not be found!');
        return redirect()->back();


    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreMetadataRequest $request
     * @param  \App\Song $song
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreMetadataRequest $request, string $qisimah_id)
    {
        return $this->storeMetaData($request, $qisimah_id, true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $qisimah_id)
    {
        $song = Song::where('qisimah_id', $qisimah_id)->first();
        if ($song){
            return $song->remove();
        }
        session()->flash('error', 'Song does not exist!');
        return redirect()->back();
    }
}
