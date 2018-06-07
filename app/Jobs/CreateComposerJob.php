<?php

namespace App\Jobs;

use App\Composer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateComposerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;

    /**
     * Create a new job instance.
     *
     * @param array $user
     */
    public function __construct(array $user)
    {
        $this->user = $user;
        $this->user['search_box'] = $user['nick_name'];
        $this->user['full_name'] = $user['name'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Composer::create($this->user);
    }
}
