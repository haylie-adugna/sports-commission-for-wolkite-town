<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsMatchsPivotTable extends Migration
{
    public function up()
    {
        Schema::create('clubs_matchs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clubs_id');
            $table->foreign('clubs_id', 'clubs_id_fk_1230843')->references('id')->on('clubs')->onDelete('cascade');
            $table->unsignedBigInteger('matchs_id');
            $table->foreign('matchs_id', 'matchs_id_fk_1230843')->references('id')->on('matchs')->onDelete('cascade');
        });

    }
}
