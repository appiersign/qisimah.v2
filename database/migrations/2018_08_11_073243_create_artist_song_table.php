<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_song', function (Blueprint $table) {
            $table->unsignedInteger('artist_id');
            $table->unsignedInteger('song_id');
            $table->timestamps();

            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
                ->onDelete('cascade');

            $table->foreign('song_id')
                ->references('id')
                ->on('songs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_song');
    }
}
