<?php

use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    return [
        "name"  =>  $faker->country,
        "qisimah_id"    =>  str_random(),
        "user_id"   =>  \App\User::inRandomOrder()->first()->id,
        "short_name"    => $faker->countryISOAlpha3,
        "latitude"  =>  $faker->latitude,
        "longitude" =>  $faker->longitude
    ];
});
