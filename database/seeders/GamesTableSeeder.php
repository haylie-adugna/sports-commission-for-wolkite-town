<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for the 'news' type
        DB::table('games')->insert([
            'game_type' => 'Sample Game',
            'description' => 'Sample game description.',
            'game_category' => 'Team Sport',
            'rules' => 'Sample game rules.',
            'duration' => '2 hours',
            'player' => 'Sample Player',
            'venue' => 'Sample Venue',
            'equipment' => 'Sample Equipment',
            'season' => 'Sample Season',
            'governing_body' => 'Sample Governing Body',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
    }
}
