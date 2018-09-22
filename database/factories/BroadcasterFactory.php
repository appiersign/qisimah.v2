<?php

use Faker\Generator as Faker;

$factory->define(App\Broadcaster::class, function (Faker $faker) {
    return [
        "qisimah_id" => str_random(),
        "stream_id" => str_random(),
        "region_id" => \App\Region::inRandomOrder()->first()->id,
        "user_id" => 1,
        "name" => $faker->streetName,
        "search_box" => "search_box name",
        "frequency" => $faker->randomFloat(2, 85, 108),
        "type" => "radio",
        "logo" => "",
        "city" => "Accra",
        "address" => "address",
        "telephone" => "telephone",
        "tag_line" => "the best tag line ever",
        "status" => 1,
        "stream_url" => ""
    ];
});
