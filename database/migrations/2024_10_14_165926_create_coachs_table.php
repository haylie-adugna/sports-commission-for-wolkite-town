<?php
// In create_players_table.php
// In create_players_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachsTable extends Migration
{
    public function up()
    {
        Schema::create('coachs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->unique()->onDelete('cascade');
            $table->foreignId('club_id')->constrained(); // Foreign key referencing the clubs table
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coachs');
    }
}
