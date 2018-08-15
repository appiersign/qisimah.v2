<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Region::class)->create([
            "name"  =>  "Greater Accra",
            "search_box"    =>  "greater accra",
            "longitude" =>  "5.8143",
            "latitude"  =>  "0.0747"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Central",
            "search_box"    =>  "central",
            "longitude" =>  "5.5608",
            "latitude"  =>  "1.0586"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Eastern",
            "search_box"    =>  "eastern",
            "longitude" =>  "6.2374",
            "latitude"  =>  "0.4502"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Volta",
            "search_box"    =>  "volta",
            "longitude" =>  "6.5781",
            "latitude"  =>  "0.4502"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Western",
            "search_box"    =>  "western",
            "longitude" =>  "5.3902",
            "latitude"  =>  "2.1450"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Ashanti",
            "search_box"    =>  "ashanti",
            "longitude" =>  "6.7470",
            "latitude"  =>  "1.5209"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Brong-Ahafo",
            "search_box"    =>  "brong-ahafo",
            "longitude" =>  "7.9559",
            "latitude"  =>  "1.6761"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Northern",
            "search_box"    =>  "northern",
            "longitude" =>  "9.5439",
            "latitude"  =>  "0.9057"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Upper East",
            "search_box"    =>  "upper east",
            "longitude" =>  "10.7082",
            "latitude"  =>  "0.9821"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Upper West",
            "search_box"    =>  "upper west",
            "longitude" =>  "10.2530",
            "latitude"  =>  "2.1450"
        ]);
    }
}
