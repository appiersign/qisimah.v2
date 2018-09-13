<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryBroadcasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $country_qisimah_id
     * @return \Illuminate\Http\Response
     */
    public function index(string $country_qisimah_id)
    {
        try {
            $country = Country::with('broadcasters')->where('qisimah_id', $country_qisimah_id)->first();
            if ($country) {
                if (\request()->ajax()) {
                    return response()->json($country->broadcasters()->orderBy('name')->get()->toArray());
                }
                return $country->broadcasters;
            }

        } catch (\Exception $exception) {
            if (\request()->ajax()) {
                return response()->json($exception);
            }
            session()->flash('success', 'Country does not exist!');
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
