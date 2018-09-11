<?php

use Faker\Generator as Faker;

$factory->define(App\Play::class, function (Faker $faker) {
    $song = \App\Song::inRandomOrder()->first();

    return [
        'stream_id' =>  \App\Broadcaster::inRandomOrder()->first()->stream_id,
        'audio_id'  =>  $song->qisimah_id,
        'acr_id'    =>  $song->acr_id,
        'played_at' =>  $faker->dateTimeBetween('-2 month'),
        'duration'  =>  $faker->randomDigit
    ];
});
