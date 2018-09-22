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
            $media = $instagram->media()->paginate(20);
            $user = Auth::user();
            session()->flash('active-tab', 'instagram');
            return view('pages.index', compact('user', 'media', 'instagram'));
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            session()->flash('error', $exception->getMessage());
            return back();
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
