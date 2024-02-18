<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'commissioner',
            ],
            [
                'id'    => 2,
                'title' => 'gameofficer',
            ],
            [
                'id'    => 3,
                'title' => 'club_manager',
            ],
            [
                'id'    => 4,
                'title' => 'coach',
            ],
            [
                'id'    => 5,
                'title' => 'player',
            ],
            [
                'id'    => 6,
                'title' => 'football_match_score_recorder',
            ],
            [
                'id'    => 7,
                'title' => 'volleyball _match_score_recorder',
            ],
            [
                'id'    => 8,
                'title' => 'basketball_match_score_recorder',
            ],
            [
                'id'    => 9,
                'title' => 'user',
            ],
            [
                'id'    => 10,
                'title' => 'project_manager',
            ],
            [
                'id'    => 11,
                'title' => 'referee',
            ],
        ];

        Role::insert($roles);

    }
}
