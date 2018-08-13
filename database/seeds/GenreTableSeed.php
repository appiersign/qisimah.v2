<?php

use Illuminate\Database\Seeder;

class GenreTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Genre::class)->create([
            "name" => "Hip Hip",
            "search_box" => "hip hop",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Rap",
            "search_box" => "rap",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Hip Life",
            "search_box" => "hip life",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "High Life",
            "search_box" => "high life",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Gospel",
            "search_box" => "gospel",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Reggae",
            "search_box" => "reggae",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Dance Hall",
            "search_box" => "dance hall",
            "qisimah_id" => str_random()
        ]);

        factory(\App\Genre::class)->create([
            "name" => "Afro Pop",
            "search_box" => "afro pop",
            "qisimah_id" => str_random()
        ]);
    }
}
