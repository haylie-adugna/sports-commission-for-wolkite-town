<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuessedResultsTable extends Migration
{
    public function up()
    {
        Schema::create('guessed_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('match_id');
            $table->unsignedInteger('team1_goals');
            $table->unsignedInteger('team2_goals');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('match_id')->references('id')->on('matchs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('guessed_results');
    }

}
