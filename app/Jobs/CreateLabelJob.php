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

    private $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( array $user )
    {
        $this->user['name'] = $user['nick_name'];
        $this->user['search_box'] = $user['nick_name'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Label::create($this->user);
    }
}
