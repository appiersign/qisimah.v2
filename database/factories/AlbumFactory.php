<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        "qisimah_id"    => str_random(),
        "tile"  =>  $faker->name,
        "search_box"    =>  $faker->name,
        "release_year"  =>  $faker->year,
        "artist_id"     =>  \App\Artist::first()->id,
        "user_id"       =>  \App\User::first()->id
    ];
});
