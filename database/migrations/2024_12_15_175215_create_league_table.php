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
            $table->unsignedBigInteger('club_id');
            $table->integer('total_goal')->default(0);
            $table->integer('total_played')->default(0);
            $table->integer('total_win')->default(0);
            $table->integer('total_draw')->default(0);
            $table->integer('total_lost')->default(0);
            $table->integer('total_goal_against')->default(0);
            $table->integer('goal_difference')->default(0);
            $table->integer('total_point')->default(0);
            $table->integer('point_difference')->nullable();
            $table->integer('rank')->nullable();
            $table->timestamps();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
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
