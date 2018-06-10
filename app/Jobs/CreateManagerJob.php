<?php

namespace App\Jobs;

use App\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateManagerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @param array $data
     */
    public function __construct( array $data )
    {
        $this->data = $data;
        $this->data['search_box'] = $this->data['name'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Manager::create($this->data);
    }
}
