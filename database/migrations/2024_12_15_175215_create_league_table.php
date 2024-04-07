<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueTable extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->integer('team1_point')->default(0);
            $table->integer('team2_point')->default(0);
            $table->integer('team1_goal')->default(0);
            $table->integer('team2_goal')->default(0);
            $table->integer('team1_played')->default(0);
            $table->integer('team2_played')->default(0);
            $table->integer('team1_win')->default(0);
            $table->integer('team2_win')->default(0);
            $table->integer('team1_draw')->default(0);
            $table->integer('team2_draw')->default(0);
            $table->integer('team1_losse')->default(0);
            $table->integer('team2_losse')->default(0);
            $table->integer('rank')->nullable();
            $table->integer('point_difference')->nullable();
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matchs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
    }
}
