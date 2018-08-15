<?php

use Faker\Generator as Faker;

$factory->define(App\Region::class, function (Faker $faker) {
    return [
        "qisimah_id" => str_random(),
        "country_id"    =>  1,
        "user_id"   =>  1
    ];
});
