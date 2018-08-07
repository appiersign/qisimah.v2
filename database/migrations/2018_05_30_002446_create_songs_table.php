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
            $table->string('qisimah_id')->unique();
            $table->string('acr_id')->unique()->nullable();
            $table->unsignedInteger('album_id');
            $table->unsignedInteger('user_id');
            $table->string('title')->index();
            $table->string('search_box')->index();
            $table->unsignedInteger('duration')->nullable();
            $table->unsignedTinyInteger('status');
            $table->string('version')->nullable();
            $table->string('art')->nullable();
            $table->date('release_date')->nullable();
            $table->timestamps();
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
