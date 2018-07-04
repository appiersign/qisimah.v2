<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->unique();
            $table->string('video_id')->unique();
            $table->string('channel_id')->index();
            $table->dateTime('published_at');
            $table->string('title');
            $table->text('description');
            $table->string('thumbnail_default')->nullable();
            $table->string('thumbnail_medium')->nullable();
            $table->string('thumbnail_high')->nullable();
            $table->string('thumbnail_standard')->nullable();
            $table->string('thumbnail_maxres')->nullable();
            $table->string('duration')->nullable();
            $table->integer('views')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
            $table->integer('favorites')->nullable();
            $table->integer('comments')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
