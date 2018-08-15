<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ArtistsTableSeeder::class);
         $this->call(GenreTableSeeder::class);
         $this->call(ProducerTableSeeder::class);
         $this->call(LabelTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(AlbumTableSeeder::class);
         $this->call(CountryTableSeeder::class);
         $this->call(RegionTableSeeder::class);
         $this->call(TagTableSeeder::class);
    }
}
