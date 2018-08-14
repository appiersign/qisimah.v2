<?php

namespace App\Console\Commands;

use App\FingerPrint;
use App\Song;
use Illuminate\Console\Command;

class FingerprintCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fingerprint:song';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload Song, generate fingerprint and duration';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $song = Song::with('artist')
            ->where('acr_id', null)
            ->oldest('created_at')
            ->first();
        $fingerprint = new FingerPrint($song, 'play-ground');
        return $fingerprint->do();
    }
}
