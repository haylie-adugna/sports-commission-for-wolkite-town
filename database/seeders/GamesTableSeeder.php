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
                'Name' => 'Event ',
                'Rules' => 'Sample rules for Event ',
                'Equipment' => 'Sample equipment for Event ',
                'Duration' => 'Sample duration for Event ',
                'Venue' => 'Sample venue for Event ',
                'Season' => 'Sample season for Event ',
                'Governing_Body' => 'Sample governing body for Event ',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        // Add more seed data if needed
    }
}
