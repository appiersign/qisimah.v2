<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadcasterTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadcaster_tag', function (Blueprint $table) {
            $table->unsignedInteger('broadcaster_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();

            $table->foreign('broadcaster_id')
                ->references('id')
                ->on('broadcasters')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
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
        Schema::dropIfExists('broadcaster_tag');
    }
}
