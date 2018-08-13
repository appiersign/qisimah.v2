<?php

use Illuminate\Database\Seeder;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Producer::class)->create();
        factory(\App\Producer::class)->create();
        factory(\App\Producer::class)->create();
        factory(\App\Producer::class)->create();
        factory(\App\Producer::class)->create();
    }
}
