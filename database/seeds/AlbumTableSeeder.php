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
        $album = new \App\Album();
        $album->setTitle("Single");
        $album->setYear(2018);
        $album->label()->associate(1);
        $album->artist()->associate(1);
        $album->user()->associate(1);
        $album->save();
    }
}
