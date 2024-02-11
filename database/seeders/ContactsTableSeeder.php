<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed data for the 'contacts' table
        Contacts::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Sample message from John Doe.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
}
}
