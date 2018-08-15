<?php

use Faker\Generator as Faker;

$factory->define(App\Country::class, function (Faker $faker) {
    return [
        "qisimah_id"    =>  str_random(),
        "user_id"   =>  \App\User::inRandomOrder()->first()->id,
    ];
});
