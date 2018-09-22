<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            "email" =>  "braasig@gmail.com",
            "password"  =>  bcrypt('password'),
            "name"  =>  "Solomon APPIER-SIGN",
            "gender"    =>  "male",
            "country_id"    =>  1,
            "type" => "admin",
            "nick_name" =>  "niisign"
        ]);

        factory(\App\User::class)->create();
        factory(\App\User::class)->create();
        factory(\App\User::class)->create();
    }
}
