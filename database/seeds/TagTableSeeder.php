<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tag::class)->create([
            "name"  =>  "Music",
            "search_box"    =>  "music"
        ]);

        factory(\App\Tag::class)->create([
            "name"  =>  "Entertainment",
            "search_box"    =>  "entertainment"
        ]);

        factory(\App\Tag::class)->create([
            "name"  =>  "Politics",
            "search_box"    =>  "politics"
        ]);

        factory(\App\Tag::class)->create([
            "name"  =>  "Business",
            "search_box"    =>  "business"
        ]);

        factory(\App\Tag::class)->create([
            "name"  =>  "News",
            "search_box"    =>  "news"
        ]);
    }
}
