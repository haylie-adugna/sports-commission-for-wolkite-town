<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->foreignId('club_manager_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('coach_name_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('contact_information');
            $table->string('logo')->nullable();
            $table->string('social_media_link')->nullable();
            $table->string('location')->nullable();
            $table->foreignId('game_type_id')->nullable()->constrained('games')->onDelete('set null');
            $table->string('document')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
