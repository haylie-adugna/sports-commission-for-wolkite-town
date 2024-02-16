<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                ['id' => '1', 'name' => 'commissioner'],
                ['id' => '2', 'name' => 'gameofficer'],
                ['id' => '3', 'name' => 'clubmanager'],
                ['id' => '4', 'name' => 'coach'],
                ['id' => '5', 'name' => 'player'],
                ['id' => '6', 'name' => 'projectmanager'],
        ];
        DB::table('user_types')->insert($data);
    }
}
