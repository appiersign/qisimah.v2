<?php

namespace App\Http\Controllers;

use App\Broadcaster;
use Illuminate\Http\Request;

class BroadcasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $broadcasters = Broadcaster::all();
        return view('pages.broadcaster.index', compact('broadcasters'));
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
     * @param  \App\Broadcaster  $broadcaster
     * @return \Illuminate\Http\Response
     */
    public function show(Broadcaster $broadcaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Broadcaster  $broadcaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Broadcaster $broadcaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Broadcaster  $broadcaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Broadcaster $broadcaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Broadcaster  $broadcaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Broadcaster $broadcaster)
    {
        //
    }
}
