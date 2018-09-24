<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYouTubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('you_tubes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('artist_id')->index();
            $table->string('channel_id')->unique();
            $table->string('etag');
            $table->string('title');
            $table->string('description');
            $table->dateTime('published_at');
            $table->string('avatar');
            $table->string('views');
            $table->string('subscribers');
            $table->string('likes')->nullable();
            $table->string('favorites')->nullable();
            $table->timestamps();
            $table->dateTime('last_request')->nullable();
            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('you_tubes');
    }
}
