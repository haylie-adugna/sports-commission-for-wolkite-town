<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('match_recoreds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matchs')->onDelete('cascade');
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade');
            $table->integer('number_of_goal');
            $table->foreignId('goal_scorer')->constrained('players')->onDelete('cascade');
            $table->foreignId('goal_assistant')->constrained('users')->onDelete('cascade');
            $table->time('goal_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matchs_recoreds');
    }
};
