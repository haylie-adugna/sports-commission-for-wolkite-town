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
            $table->string('club_manager');
            $table->string('coach_name')->nullable();
            $table->string('contact_information');
            $table->string('logo')->nullable();
            $table->string('social_media_link')->nullable();
            $table->string('location')->nullable();
            $table->string('game_category')->nullable();
            $table->string('document')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('active'); // Assuming "status" is either active or inactive
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
