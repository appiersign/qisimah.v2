<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->unique();
            $table->string('external_id')->unique();
            $table->unsignedInteger('instagram_id');
            $table->text('caption')->nullable();
            $table->string('type');
            $table->string('link');
            $table->boolean('user_has_liked')->default(false);
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('comments')->default(0);
            $table->text('avatar')->nullable();
            $table->text('avatar_standard')->nullable();
            $table->text('avatar_low')->nullable();
            $table->integer('created_time');
            $table->timestamps();
            $table->foreign('instagram_id')->references('id')->on('instagrams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
