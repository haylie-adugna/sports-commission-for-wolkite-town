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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->string('Team1');
            $table->string('Team2');
            $table->string('Referee')->nullable();
            $table->string('Assistant_Referee1')->nullable();
            $table->string('Assistant_Referee2')->nullable();
            $table->string('Start_time')->nullable();
            $table->string('End_time')->nullable();
            $table->string('Venue')->nullable();
            $table->string('Medical_Support')->nullable();
            $table->string('Commentator')->nullable();
            $table->string('Promoter')->nullable();
            $table->string('Ticket')->nullable();
            $table->string('Recored_Keeping')->nullable();
            $table->string('status')->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
