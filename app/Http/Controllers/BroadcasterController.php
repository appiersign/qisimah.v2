<?php

namespace App\Http\Controllers;

use App\Broadcaster;
use App\Country;
use App\Http\Requests\StoreBroadcasterRequest;
use App\Region;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BroadcasterController extends Controller
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
        $radios = Broadcaster::where('type', 'radio')->get();
        $tvs = Broadcaster::where('type', 'tv')->get();
        return view('pages.broadcaster.index', compact('radios', 'tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $regions = [];
        $tags = Tag::all();
        return view('pages.broadcaster.create', compact('countries', 'regions', 'tags'));
    }

    public function getRegions($country)
    {
        return Region::where('country_id', $country)->get(['id', 'name']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBroadcasterRequest $request)
    {
        $broadcaster = new Broadcaster();
        return $broadcaster
            ->setQisimahId()
            ->setName($request->input('name'))
            ->setFrequency($request->input('frequency'))
            ->setCity($request->input('city'))
            ->setRegion($request->input('region'))
            ->setUser(Auth::id())
            ->setStreamUrl($request->input('stream'))
            ->setAddress($request->input('address'))
            ->setTagLine($request->input('tag_line'))
            ->setType($request->input('type'))
            ->setTelephone($request->input('telephone'))
            ->setLogo($request)
            ->store();
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
