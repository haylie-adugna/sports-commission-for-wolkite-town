<?php
// In create_players_table.php
// In create_players_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Foreign key referencing the users table
            $table->foreignId('club_id')->constrained(); // Foreign key referencing the clubs table
            $table->foreignId('game_id')->constrained(); // Foreign key referencing the games table
            $table->string('assistant')->nullable();
            $table->integer('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
