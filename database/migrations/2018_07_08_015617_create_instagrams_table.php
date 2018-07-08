<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagrams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->unique();
            $table->string('external_id')->unqiue();
            $table->string('user_name')->unique();
            $table->string('full_name');
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_business')->default(false);
            $table->unsignedInteger('media')->default(0);
            $table->unsignedInteger('follows')->default(0);
            $table->unsignedInteger('followed_by')->default(0);
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('comments')->default(0);
            $table->dateTime('last_request')->default();
            $table->dateTime('last_media_request')->default();
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
        Schema::dropIfExists('instagrams');
    }
}
