<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Album::create([
            "title" => "Single",
            "search_box" => "single",
            "art"   => "/storage/images/default.jpg",
            "artist_id" => 1,
            "label_id" => 1,
            "user_id" => 1,
            "release_year" => 2018
        ]);
    }
}
