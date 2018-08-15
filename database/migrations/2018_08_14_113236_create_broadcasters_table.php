<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadcastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadcasters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->index();
            $table->string('stream_id')->index()->nullable();
            $table->unsignedInteger('region_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('name')->index();
            $table->string('search_box')->index();
            $table->string('frequency');
            $table->string('type')->index();
            $table->string('logo')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('tag_line')->nullable();
            $table->smallInteger('status')->default(0);;
            $table->string('stream_url')->nullable();
            $table->timestamps();

            $table->unique([
                'qisimah_id',
                'stream_id',
                'stream_url'
            ]);

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('broadcasters');
    }
}
