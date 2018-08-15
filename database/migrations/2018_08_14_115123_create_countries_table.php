<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->index();
            $table->unsignedInteger('user_id');
            $table->string('name')->index();
            $table->string('short_name')->index();
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();

            $table->unique([
                'name',
                'short_name',
                'qisimah_id'
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
        Schema::dropIfExists('countries');
    }
}
