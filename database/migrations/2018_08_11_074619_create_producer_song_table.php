<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_song', function (Blueprint $table) {
            $table->unsignedInteger('producer_id');
            $table->unsignedInteger('song_id');
            $table->timestamps();

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers')
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
        Schema::dropIfExists('producer_song');
    }
}
