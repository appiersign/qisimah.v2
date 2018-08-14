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
        factory(\App\Country::class)->create();
        factory(\App\Country::class)->create();
        factory(\App\Country::class)->create();
        factory(\App\Country::class)->create();
    }
}
