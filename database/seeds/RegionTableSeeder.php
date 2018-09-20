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
            "longitude" =>  "0.0201677",
            "latitude"  =>  "5.8068864"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Central",
            "search_box"    =>  "central",
            "longitude" =>  "-1.0331737",
            "latitude"  =>  "5.545681"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Eastern",
            "search_box"    =>  "eastern",
            "longitude" =>  "-0.3331847",
            "latitude"  =>  "6.350681"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Volta",
            "search_box"    =>  "volta",
            "longitude" =>  "0.4598807",
            "latitude"  =>  "7.1495866"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Western",
            "search_box"    =>  "western",
            "longitude" =>  "-2.4446727",
            "latitude"  =>  "5.8102804"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Ashanti",
            "search_box"    =>  "ashanti",
            "longitude" =>  "-1.4160737",
            "latitude"  =>  "6.884479"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Brong-Ahafo",
            "search_box"    =>  "brong-ahafo",
            "longitude" =>  "-1.6004397",
            "latitude"  =>  "7.879671"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Northern",
            "search_box"    =>  "northern",
            "longitude" =>  "-1.6004397",
            "latitude"  =>  "9.4266623"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Upper East",
            "search_box"    =>  "upper east",
            "longitude" =>  "-0.6544707",
            "latitude"  =>  "10.809746"
        ]);

        factory(\App\Region::class)->create([
            "name"  =>  "Upper West",
            "search_box"    =>  "upper west",
            "longitude" =>  "-1.9859936",
            "latitude"  =>  "10.5021581"
        ]);
    }
}
