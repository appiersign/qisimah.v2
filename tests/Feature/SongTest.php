<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class SongTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpload()
    {
        $user = \factory(User::class)->create();
        $file = UploadedFile::fake()->create('song.mp3', 7000);

        $this->actingAs($user)->post('songs', [
            "song"  =>  $file
        ])->assertSeeText('metadata');
    }
}
