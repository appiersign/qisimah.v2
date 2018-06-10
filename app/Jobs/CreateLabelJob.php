<?php

namespace App\Jobs;

use App\Label;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateLabelJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( array $data )
    {
        $this->data = $data;
        $this->data['search_box'] = $data['name'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Label::create($this->data);
    }
}
