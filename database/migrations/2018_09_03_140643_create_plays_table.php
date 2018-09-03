<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('audio_id')->index();
            $table->string('acr_id')->index();
            $table->string('stream_id')->index();
            $table->smallInteger('duration');
            $table->timestamp('played_at');
            $table->timestamps();

            $table->foreign('audio_id')
                ->references('qisimah_id')
                ->on('songs')
                ->onDelete('cascade');

            $table->foreign('stream_id')
                ->references('stream_id')
                ->on('broadcasters')
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
        Schema::dropIfExists('plays');
    }
}
