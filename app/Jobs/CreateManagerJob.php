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

    private $user;

    /**
     * Create a new job instance.
     *
     * @param array $user
     */
    public function __construct( array $user )
    {
        $this->user = $user;
        $this->user['search_box'] = $this->user['nick_name'];
        $this->user['full_name'] = $user['name'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Manager::create($this->user);
    }
}
