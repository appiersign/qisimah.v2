<?php

use Faker\Generator as Faker;

$factory->define(App\Label::class, function (Faker $faker) {
    return [
        "name" => $faker->streetName,
        "rep"   =>  $faker->name,
        "email" =>  $faker->email,
        "telephone" =>  $faker->phoneNumber,
        "search_box"   =>  $faker->firstName,
        "website"   => 'https://qisimah.com'
    ];
});
