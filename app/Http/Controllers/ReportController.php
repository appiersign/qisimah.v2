<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Country;
use App\Song;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createSummary()
    {
        $countries = Country::all();
        $artists = Artist::all();

        return view('pages.report.summaryForm', compact('countries', 'artists'));
    }

    public function summary(Request $request)
    {
        $this->validate($request, [
            'artist' => 'required',
            'country' => 'required',
            'song' => 'required',
            'dates' => 'required'
        ]);

        try {

            $artist = Artist::where('qisimah_id', $request->artist)->first();

            if ($request->artist <> 'all') {

                if (is_null($artist)) {

                    throw new \Exception('Artist does not exist!');

                }

            }

            if ($request->country <> 'all') {

                if (!Country::where('qisimah_id', $request->country)->exists()) {

                    throw new \Exception('Country does not exist!');
                }

            }

            if ($request->song <> 'all') {

                if ($request->artist <> 'all') {

                    if (!$artist->songs()->where('qisimah_id', $request->song)->exists()) {

                        throw new \Exception('Song does not exist!');
                    }

                }

            }

            $dates = explode(' - ', $request->dates);

            $from = Carbon::parse($dates[0])->toDateString();
            $to = Carbon::parse($dates[1])->toDateString();

            return redirect()->route('reports.get.summary', ['artist' => $request->artist, 'song' => $request->song, 'from' => $from, 'to' => $to]);

        } catch (\Exception $exception) {

            logger($exception->getMessage());

            session()->flash('error', $exception->getMessage());

            return back()->withInput();
        }
    }

    public function getSummary()
    {
        return view('pages.report.summary');
    }

    public function compare()
    {
        return view('pages.report.compare');
    }
}
