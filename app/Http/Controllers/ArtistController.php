<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests\ArtistManagementDetailsRequest;
use App\Jobs\CreateLabelJob;
use App\Jobs\CreateManagerJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
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
        //
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
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
    }

    public function storeArtistManagementDetails(ArtistManagementDetailsRequest $artistManagementDetailsRequest, $qisimah_id)
    {
        $label = [];
        $label['name']      = $artistManagementDetailsRequest->input('label_name');
        $label['rep']       = $artistManagementDetailsRequest->input('label_rep');
        $label['email']     = $artistManagementDetailsRequest->input('label_email');
        $label['website']   = $artistManagementDetailsRequest->input('label_website');
        $label['telephone'] = $artistManagementDetailsRequest->input('label_telephone');

        $createLabel = new CreateLabelJob($label);
        try {
            $this->dispatch($createLabel);
            if ($artistManagementDetailsRequest->input('autofill-management') === 'on'){
                $createManagement = new CreateManagerJob($label);
                try {
                    $this->dispatch($createManagement);
                } catch (\Exception $exception) {
                    return $exception->getMessage();
                }
            }
            $artist = Artist::where('qisimah_id', $qisimah_id)->first();
            $artist->users()->attach(Auth::id());
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        return $artistManagementDetailsRequest->all();
    }
}
