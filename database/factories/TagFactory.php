<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        "name"  =>  'Music',
        "search_box"    =>  "music",
        "qisimah_id"    =>  str_random(),
        "user_id"   =>  1
    ];
});
