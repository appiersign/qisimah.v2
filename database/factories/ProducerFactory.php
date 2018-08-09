<?php

use Faker\Generator as Faker;

$factory->define(App\Producer::class, function (Faker $faker) {
    return [
        "full_name" => $faker->name,
        "nick_name" => $faker->firstName,
        "search_box" => $faker->lastName
    ];
});
