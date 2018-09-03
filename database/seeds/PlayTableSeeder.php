<?php

use Illuminate\Database\Seeder;

class PlayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
        factory(\App\Models\Play::class)->create();
    }
}
