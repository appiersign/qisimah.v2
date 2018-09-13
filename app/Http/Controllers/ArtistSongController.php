<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ArtistSongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $qisimah_id
     * @return \Illuminate\Http\Response
     */
    public function index(string $qisimah_id)
    {
        try {

            $artist = Artist::where('qisimah_id', $qisimah_id)->first();

            if (is_null($artist)) {

                throw new \Exception('Artist not found!');

            }

            $songs = new Collection();

            $artist->songs()->get(['qisimah_id', 'title'])->each( function ($song) use ($songs) {

                $songs->push($song);

            });

            $artist->features()->get(['qisimah_id', 'title'])->each( function ($song) use ($songs) {

                $songs->push($song);

            });

            if (\request()->ajax()){

                return $songs;
            }


        } catch (\Exception $exception) {

            session()->flash('error', $exception->getMessage());

            return $exception->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
