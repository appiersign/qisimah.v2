<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Http\Requests\StoreAlbumRequest;
use App\Label;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
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
        $artists = array();
        $albums = Album::with('songs', 'artist')->get();
        return view('pages.albums.index', compact('artists', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $labels = Label::all();
        return view('pages.albums.create', compact('artists', 'labels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumRequest $request)
    {
        $album = new Album();
        $album->setTitle($request->input('title'));
        $album->setYear($request->input('year'));
        $album->setArt($request);
        return $album->store(User::find(Auth::id()), Artist::find($request->input('artist')), Label::find($request->input('label')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(string $qisimah_id)
    {
        $album = Album::with('songs')->where('qisimah_id', $qisimah_id)->first();
        $artists = [];
        return view('pages.albums.show', compact('artists', 'album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $artists = Artist::all();
        $labels = Label::all();
        return view('pages.albums.edit', compact('artists', 'album', 'labels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        try {
            $album->delete();
            session()->flash('success', 'Album deleted!');
            return redirect()->route('albums.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Album could not be deleted!');
            return redirect()->back();
        }
    }
}
