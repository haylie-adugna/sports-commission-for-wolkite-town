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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique()->nullable();
            $table->string('password');
            $table->boolean('verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->string('city')->nullable();
            $table->string('language')->nullable();
            $table->string('photo')->nullable();
            $table->string('experience')->nullable();
            $table->string('mother_full_name')->nullable();
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
        Schema::dropIfExists('users');
    }
};
