<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBroadcasterTableAddForeignKeyRegionId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('broadcasters', function (Blueprint $table) {
            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
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
        Schema::table('broadcasters', function (Blueprint $table){
            $table->dropForeign('broadcasters_region_id_foreign');
            $table->dropForeign('broadcasters_country_id_foreign');
        });
    }
}
