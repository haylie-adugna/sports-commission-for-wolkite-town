<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerPerformanceTable extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_performances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('club_id');
            $table->integer('total_goal')->default(0);
            $table->integer('total_assist')->default(0);
            $table->integer('total_yellow_card')->default(0);
            $table->integer('total_red_card')->default(0);
            $table->integer('total_shot')->default(0);
            $table->integer('total_pass')->default(0);
            $table->integer('total_tackle')->default(0);
            $table->timestamps();
            $table->foreign('player_id')->references('user_id')->on('players')->onDelete('cascade');
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
        Schema::dropIfExists('player_performances');
    }
}
