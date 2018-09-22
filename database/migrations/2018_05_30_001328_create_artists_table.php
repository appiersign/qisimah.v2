<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qisimah_id')->unique();
            $table->string('full_name')->nullable();
            $table->string('nick_name');
            $table->string('search_box');
            $table->string('google_auth_code')->nullable();
            $table->string('google_access_token')->nullable();
            $table->string('google_refresh_token')->nullable();
            $table->string('instagram_auth_code')->nullable();
            $table->string('instagram_access_token')->nullable();
            $table->string('type', 5)->default('solo');
            $table->string('members')->nullable();
            $table->unsignedInteger('label_id')->nullable()->index();
            $table->unsignedInteger('manager_id')->nullable()->index();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
