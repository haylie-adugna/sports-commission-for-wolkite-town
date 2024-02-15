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
        Schema::create('player_performance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->date('match_date');
            $table->integer('goals_scored')->default(0);
            $table->integer('assists')->default(0);
            $table->integer('cards')->default(0);
            $table->integer('red_cards')->default(0);
            // Add more columns as per your requirements
            $table->integer('shots_on_target')->default(0);
            $table->integer('passes')->default(0);
            $table->integer('tackles')->default(0);

            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_performance');
    }
}
