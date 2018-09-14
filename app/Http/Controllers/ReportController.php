<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Broadcaster;
use App\Country;
use App\Play;
use App\Song;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

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

    private $relationships = [];

    /**
     * ReportController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createSummary()
    {
        $countries = Country::all();
        $artists = Artist::all();

        return view('pages.report.summaryForm', compact('countries', 'artists'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
                        if (!$artist->features()->where('qisimah_id', $request->song)->exists())
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

    /**
     * @param string $artist
     * @param string $country
     * @param string $song
     * @param string $from
     * @param string $to
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSummary(string $artist, string $country, string $song, string $from, string $to)
    {
        $curve_data = [];

        if (\request()->ajax()){
            return $this->fetchSummaryData($artist, $country, $song, getDateDiff($from, $to), $from, $to);;
        }

        $artists = Artist::all();
        $countries = Country::all();


        return view('pages.report.summary', compact('curve_data', 'artists', 'countries'));
    }

    /**
     * @param string $artist
     * @param string $country
     * @param string $song
     * @param int $date_difference
     * @param string $from
     * @param string $to
     * @return array
     */
    public function fetchSummaryData(string $artist, string $country, string $song, int $date_difference, string $from, string $to)
    {
        $this->relationships = [ 'broadcaster.region.country', 'song.artist' ];

        $query = Play::with($this->relationships);
        $artist_songs = [];

        if ($artist <> 'all') {
            $songs = Artist::with('songs', 'features') // Get Artist
                ->where('qisimah_id', $artist)
                ->first();

            $artist_songs = array_merge($artist_songs, $songs->songs()->pluck('songs.qisimah_id')->toArray()); // Get all songs of artist
            $artist_songs = array_merge($artist_songs, $songs->features()->pluck('songs.qisimah_id')->toArray()); // Get all features of artists

            $query->whereIn('audio_id', $artist_songs);
        }

        $country_broadcasters = [];

        if ($country <> 'all'){
            $country_id = Country::where('qisimah_id', $country)->first()->id;
            $country_broadcasters = Broadcaster::with([])
                ->where('country_id', $country_id)
                ->pluck('stream_id')
                ->toArray();
            $query->whereIn('stream_id', $country_broadcasters);
        }

        if ($song <> 'all'){
            $query->where('audio_id', $song);
        }

        $query->whereBetween('played_at', [
            Carbon::parse($from)->startOfDay()->toDateTimeString(),
            Carbon::parse($to)->endOfDay()->toDateTimeString()
        ]);

        $plays = $query->orderBy('played_at')->get();
        return $this->getPlayData($artist_songs, $song, $country_broadcasters, $from, $to, $date_difference, $plays);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function compare()
    {
        return view('pages.report.compare');
    }

    /**
     * @param Collection $plays
     */
    private function getCountryPlays(Collection $plays)
    {
        $country_data = $plays->groupBy(function ( $play ) {
            return $play->broadcaster->region->country->name;
        });

        foreach ($country_data as $country => $country_datum) {
            array_push($this->curve_data['countries'], [$country, $country_datum->count()]);
        }
    }

    /**
     * @param Collection $plays
     * @param Collection $plays_data
     */
    private function getTop5Songs(Collection $plays, Collection $plays_data)
    {
        if ($plays->count()) {
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

    }

    /**
     * @param Collection $plays
     */
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

    /**
     * @param array $artist_songs
     * @param string $song
     * @param array $country_broadcasters
     * @param string $from
     * @param string $to
     */
    private function getTop5Broadcasters(array $artist_songs, string $song, array $country_broadcasters, string $from, string $to)
    {
        $query = Play::with('broadcaster')
            ->select(DB::raw('stream_id, count(*) as plays'));

        if (count($artist_songs)){
            $query->whereIn('audio_id', $artist_songs);
        }

        if ($song <> 'all'){
            $query->where('audio_id', $song);
        }

        if (count($country_broadcasters)){
            $query->whereIn('stream_id', $country_broadcasters);
        }

        $broadcasters = $query->whereBetween('played_at', [
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

    /**
     * @param Collection $plays
     * @param int $date_difference
     * @return Collection
     */
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

    /**
     * @param array $artist
     * @param string $song
     * @param array $country_broadcasters
     * @param string $from
     * @param string $to
     * @param int $date_difference
     * @param Collection $plays
     * @return array
     */
    private function getPlayData(array $artist, string $song, array $country_broadcasters, string $from, string $to, int $date_difference, Collection $plays)
    {
        $this->getRegionalPlays($plays); // Get Regional Plays
        $this->getCountryPlays($plays); // Get Country Plays
        $this->getTop5Songs($plays, $this->groupPlaysByDateDiff($plays, $date_difference)); // Get Top Five
        $this->getTop5Broadcasters($artist, $song, $country_broadcasters, $from, $to); // Get top 5 broadcasters
        return $this->curve_data;
    }

    /**
     * @param string|null $broadcaster
     * @param string|null $artist
     * @param string|null $song
     * @param string|null $from
     * @param string|null $to
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function general(string $broadcaster = null, string $artist = null, string $song = null, string $from = null, string $to = null)
    {
        $broadcaster_count = $region_count = $play_count = 0;
        $where = [];

        $_to = Carbon::parse($to)->endOfDay()->toDateTimeString();
        $_from = Carbon::parse($from)->startOfDay()->toDateTimeString();
        $playQuery = Play::with(['broadcaster.region']);

        try {
            if ($broadcaster && !in_array($broadcaster, [null, 'all'])){
                $_broadcaster = Broadcaster::where('stream_id', $broadcaster)->first();
                if (is_null($_broadcaster)){
                    throw new \Exception('Broadcaster does not exist!');
                }
                array_push($where, ['stream_id', $broadcaster]);
            }

            if ($artist <> null && $artist <> 'all'){
                $_artist = Artist::with([])->where('qisimah_id', $artist)->first();
                if (is_null($_artist)){
                    throw new \Exception('Artist does not exist!');
                }

                if ($song <> null && $song <> 'all'){
                    $_song = $_artist->songs()->where('qisimah_id', $song)->first();
                    if (is_null($_song)){
                        $_song = $_artist->features()->where('qisimah_id', $song)->first();
                        if (is_null($_song)){
                            throw new \Exception('Song does not exist!');
                        }
                    }
                    $all_songs = [$_song->qisimah_id];
                } else {
                    $all_songs = array_merge(
                        $_artist->songs()->pluck('qisimah_id')->toArray(),
                        $_artist->features()->pluck('qisimah_id')->toArray()
                        );
                }
                $playQuery->whereIn('audio_id', $all_songs);
            }

            $broadcaster_count = $region_count = 0;
            $countries = Country::orderBy('name')->get(['qisimah_id', 'name']);
            $artists = Artist::orderBy('nick_name')->get(['id', 'nick_name', 'qisimah_id']);

            $playables = $playQuery->where($where)->whereBetween('played_at', [$_from, $_to])->get();
            $broadcaster_count = $playables->groupBy('stream_id')->count();
            $region_count = $playables->groupBy('broadcaster.region.qisimah_id')->count();
            $plays = Play::with('broadcaster.country', 'song.artist')->where($where)->whereBetween('played_at', [$_from, $_to])->paginate(20);

            return view('pages.report.general', compact('countries', 'artists', 'plays', 'broadcaster_count', 'region_count'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
            session()->flash('error', $exception->getMessage());
            return back();
        }
    }
}
