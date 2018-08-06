<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class AlbumTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStore()
    {
        $this->actingAs(User::first())->post('albums', [
            'title' => 'the reign',
            'year'  =>  '2018',
            'label' => '1'
            ])->assertJson(["title" =>  "The Reign"]);
    }
}
