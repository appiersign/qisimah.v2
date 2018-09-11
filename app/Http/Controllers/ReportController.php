<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Country;
use App\Play;
use App\Song;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    private $curve_data = [
        'plays' => [],
        'broadcasters' => [
            ['Broadcaster', 'Plays']
        ],
        'countries' => [
            ['Country', 'Plays']
        ],
        'regional' => [
            ['Region', 'Plays']
        ],
        'top_5' => [
            ['Songs', 'Plays']
        ]
    ];

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
            return redirect()->route('reports.get.summary', ['artist' => $request->artist, 'country' => $request->country, 'song' => $request->song, 'from' => $from, 'to' => $to]);

        } catch (\Exception $exception) {
            logger($exception->getMessage());
            session()->flash('error', $exception->getMessage());
            return back()->withInput();
        }
    }

    public function getSummary(string $artist, string $country, string $song, string $from, string $to)
    {
        if ($artist == 'all' && $song == 'all' && $country == 'all'){
            $curve_data = $this->getAllPlaysOfAllSongsOfAllArtistsFromAllCountries(getDateDiff($from, $to), $from, $to);
        }

        if ($artist <> 'all') {
            $curve_data = $this->getAllPlaysOfAllSongsOfArtist(getDateDiff($from, $to), $artist, $from, $to);
        }

//        return $curve_data;

        if (\request()->ajax()){
            return $curve_data;
        }

        $artists = Artist::all();
        $countries = Country::all();


        return view('pages.report.summary', compact('curve_data', 'artists', 'countries'));
    }

    /**
     * @param int $date_difference
     * @param string $from
     * @param string $to
     * @return array
     */
    public function getAllPlaysOfAllSongsOfAllArtistsFromAllCountries(int $date_difference, string $from, string $to)
    {
        $plays = Play::with([
            'broadcaster.region.country'
        ])->whereBetween('played_at', [
            Carbon::parse($from)->startOfDay()->toDateTimeString(),
            Carbon::parse($to)->endOfDay()->toDateTimeString()
        ])->orderBy('played_at')
            ->get();

        return $this->getPlayData($from, $to, $date_difference, $plays);
    }

    public function getAllPlaysOfAllSongsOfArtist(int $date_difference, string $artist, string $from, string $to)
    {
        $plays = Play::with([
            'song.artist' => function($query) use($artist) {
            $query->where('qisimah_id', $artist)->get();
        }])->whereBetween('played_at', [
            Carbon::parse($from)->startOfDay()->toDateTimeString(),
            Carbon::parse($to)->endOfDay()->toDateTimeString()
        ])->orderBy('played_at')
            ->get();

        return $this->getPlayData($from, $to, $date_difference, $plays);
    }

    public function compare()
    {
        return view('pages.report.compare');
    }

    private function getCountryPlays(Collection $plays)
    {
        $country_data = $plays->groupBy(function ( $play ) {
            return $play->broadcaster->region->country->name;
        });

        foreach ($country_data as $country => $country_datum) {
            array_push($this->curve_data['countries'], [$country, $country_datum->count()]);
        }
    }

    private function getTop5Songs(Collection $plays, Collection $plays_data)
    {
        $top_five = $plays->groupBy(function ($play) {
            return $play->song->artist->nick_name. ' - '. $play->song->title;
        });

        $limit = 5; $count = 0;
        foreach ($top_five as $song => $top_five_datum) {
            array_push($this->curve_data['top_5'], [$song, $top_five_datum->count()]);
            $count ++;
            if ($count === $limit) {
                break;
            }
        }

        foreach ($plays_data as $played_at => $play) {
            array_push($this->curve_data['plays'], [$played_at, $play->count()]);

        }
    }

    private function getRegionalPlays(Collection $plays)
    {
        $limit = 5; $count = 0;
        $regional_data = $plays->groupBy(function ($play) {
            return $play->broadcaster->region->name;
        });

        foreach ($regional_data as $region => $regional_datum) {
            array_push($this->curve_data['regional'], [$region, $regional_datum->count()]);
            $count ++;
            if ($count === $limit) {
                break;
            }
        }
    }

    private function getTop5Broadcasters(string $from, string $to)
    {
        $broadcasters = Play::with('broadcaster')
            ->select(DB::raw('stream_id, count(*) as plays'))
            ->whereBetween('played_at', [
                Carbon::parse($from)->startOfDay()->toDateTimeString(),
                Carbon::parse($to)->endOfDay()->toDateTimeString()
            ])->orderBy('plays', 'desc')
            ->groupBy('stream_id')
            ->limit(5)
            ->get();

        foreach ($broadcasters as $broadcaster) {
            array_push($this->curve_data['broadcasters'], [$broadcaster->broadcaster->name.' '. $broadcaster->broadcaster->frequency, (int) $broadcaster->plays, '#76A7FA']);
        }
    }

    private function groupPlaysByDateDiff(Collection $plays, int $date_difference)
    {
        if ( $date_difference <= 7 ) { // date range is seven days or less
            $plays_data = $plays->groupBy( function ($play){
                return $play->played_at->format('M, d');
            });
            array_push($this->curve_data['plays'], ['Days', 'Plays']);
        } elseif ( $date_difference >= 8 && $date_difference <= 28 ) { // date range is eight days or more but less than 29 days
            $plays_data = $plays->groupBy( function ($play){
                return $play->played_at->startOfWeek()->format('M, d') .' - '. $play->played_at->endOfWeek()->format('M, d Y');
            });
            array_push($this->curve_data['plays'], ['Weeks', 'Plays']);
        } else { // date range is 29 days and more
            $plays_data = $plays->groupBy( function ($play){
                return $play->played_at->format('M, Y');
            });
            array_push($this->curve_data['plays'], ['Months', 'Plays']);
        }
        return $plays_data;
    }

    private function getPlayData(string $from, string $to, int $date_difference, Collection $plays)
    {
        $this->getRegionalPlays($plays); // Get Regional Plays
        $this->getCountryPlays($plays); // Get Country Plays
        $this->getTop5Songs($plays, $this->groupPlaysByDateDiff($plays, $date_difference)); // Get Top Five
        $this->getTop5Broadcasters($from, $to); // Get top 5 broadcasters
        return $this->curve_data;
    }
}
