<?php

namespace App\Jobs;

use App\Models\Artist;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateArtistJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $artist_id;
    private $artist;

    /**
     * Create a new job instance.
     *
     * @param array $artist
     */
    public function __construct( array $artist )
    {
        $this->artist = $artist;
        $this->artist['search_box'] = $artist['nick_name'];
        $this->artist['qisimah_id'] = uniqid();
    }

    public function getArtistId()
    {
        return $this->artist_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Artist::create($this->artist);
    }
}
