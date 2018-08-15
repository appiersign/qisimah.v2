<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Country::class)->create([
            "name"  => "Ghana",
            "short_name"    =>  "GH",
            "latitude"  =>  "1.0232",
            "longitude" =>  "7.9465"
        ]);

        factory(\App\Country::class)->create([
            "name"  =>  "Kenya",
            "short_name"    =>  "KE",
            "latitude"  =>  "37.9062",
            "longitude" =>  "0.0236"
        ]);

        factory(\App\Country::class)->create([
            "name"  => "South Africa",
            "short_name"    =>  "SA",
            "latitude"  =>  "22.9375",
            "longitude" =>  "30.5595"
        ]);

        factory(\App\Country::class)->create([
            "name"  => "Nigeria",
            "short_name"    =>  "NG",
            "latitude"  =>  "8.6753",
            "longitude" =>  "9.0820"
        ]);
    }
}
