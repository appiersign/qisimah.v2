<?php

namespace App\Http\Controllers;

use App\Broadcaster;
use App\Country;
use App\Http\Requests\StoreBroadcasterRequest;
use App\Region;
use App\Tag;
use App\User;
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
        $data = $request->except('tags', 'country', 'region');

        try {
            $broadcaster = (new Broadcaster($data))->setQisimahId();

            $user = User::findOrFail(Auth::id());

            $broadcaster->user()->associate($user->id);

            $broadcaster->region()->associate($request->region);

            $broadcaster->setLogo($request)->save();

            $broadcaster->tags()->sync(explode(',', $request->tags));

            session()->flash('success', 'Broadcaster created!');

            return redirect()->route('broadcasters.index');

        } catch (\Exception $exception) {

            logger($exception->getMessage());

            session()->flash('error', 'We could not create broadcaster. Please try again!');

            return back()->withInput();
        }

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
     * Remove specified resource.
     *
     * @param string $qisimah_id
     * @return mixed
     */
    public function destroy(string $qisimah_id)
    {
        try {
            $broadcaster = Broadcaster::where('qisimah_id', $qisimah_id)->first();

            if (is_null($broadcaster)) {

                throw new \Exception();
                
            }

            $broadcaster->delete();

            session()->flash('success', 'Broadcaster deleted!');

            return redirect()->route('broadcasters.index');

        } catch (\Exception $exception) {

            session()->flash('error', 'Broadcaster could not be deleted!');

            return back();
        }

    }
}
