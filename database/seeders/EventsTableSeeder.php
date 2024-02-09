<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for the 'news' type
        DB::table('events')->insert([
            'Tittle' => 'Sample News Title',
            'Type' => 'news',
            'Body' => 'Sample news body content.',
            'photo' => 'news_photo.jpg',
            'video' => null, // Add video if applicable
            'Created_by' => 'admin@example.com',
            'status' => 'active',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
    }
}
