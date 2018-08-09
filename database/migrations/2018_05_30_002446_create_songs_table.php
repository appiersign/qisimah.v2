<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id');
            $table->string('acr_id')->nullable();
            $table->unsignedInteger('album_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('search_box')->index()->nullable();
            $table->unsignedInteger('duration')->nullable();
            $table->unsignedInteger('status')->default(0);
            $table->string('version')->nullable();
            $table->string('art')->nullable();
            $table->string('audio');
            $table->date('release_date')->nullable();
            $table->timestamps();

            $table->unique(['qisimah_id', 'acr_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
