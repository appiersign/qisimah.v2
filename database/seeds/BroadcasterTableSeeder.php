<?php

use Illuminate\Database\Seeder;

class BroadcasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Broadcaster::class)->create();
        factory(\App\Broadcaster::class)->create();
        factory(\App\Broadcaster::class)->create();
        factory(\App\Broadcaster::class)->create();
        factory(\App\Broadcaster::class)->create();
        factory(\App\Broadcaster::class)->create();
    }
}
