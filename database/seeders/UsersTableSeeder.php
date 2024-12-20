<?php

namespace Database\Seeders;
use Illuminate\Support\Str;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'             => 1,
            'first_name' => 'Haylie',
            'middle_name' => 'Adugna',
            'last_name' => 'Yitayih',
            'email' => 'haylieadugna13@gmail.com',
            'phone_number' => '0921346019',
            'password' => Hash::make('12345678'),
            'verified' => true,
            'email_verified_at' => now(),
            'age' => '23',
            'gender' => 'male',
            'date_of_birth' => '1999-01-01',
            'address' => '123 Main St',
            'country' => 'Ethiiopia',
            'nationality' => 'Ethiopian',
            'city' => 'Wolkitie',
            'language' => 'Amharic',
            'photo' => '',
            'experience' => '3 years',
            'mother_full_name' => 'ayehu anteneh',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
    }
}
