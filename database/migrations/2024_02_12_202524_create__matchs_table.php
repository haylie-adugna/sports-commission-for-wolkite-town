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
            $table->string('match_name')->nullable();
            $table->string('Team1')->nullable()->constrained('clubs')->onDelete('set null');
            $table->string('Team2')->nullable()->constrained('clubs')->onDelete('set null');
            $table->string('Referee')->nullable()->constrained('users')->onDelete('set null');
            $table->string('Assistant_Referee1')->nullable()->constrained('users')->onDelete('set null');
            $table->string('Assistant_Referee2')->nullable()->constrained('users')->onDelete('set null');
            $table->string('Start_time')->nullable();
            $table->string('End_time')->nullable();
            $table->string('Venue')->nullable();
            $table->string('Medical_Support')->nullable()->constrained('users')->onDelete('set null');
            $table->string('Commentator')->nullable()->constrained('users')->onDelete('set null');
            $table->string('Promoter')->nullable()->constrained('users')->onDelete('set null');
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
