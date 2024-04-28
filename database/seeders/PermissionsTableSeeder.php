<?php
namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'manage_complain',
            ],
            [
                'id'    => '18',
                'title' => 'manage_project',
            ],
            [
                'id'    => '19',
                'title' => 'asset_show',
            ],
            [
                'id'    => '20',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '21',
                'title' => 'asset_access',
            ],
            [
                'id'    => '22',
                'title' => 'team_create',
            ],
            [
                'id'    => '23',
                'title' => 'team_edit',
            ],
            [
                'id'    => '24',
                'title' => 'team_show',
            ],
            [
                'id'    => '25',
                'title' => 'team_delete',
            ],
            [
                'id'    => '26',
                'title' => 'team_access',
            ],
            [
                'id'    => '27',
                'title' => 'manage_games',
            ],
            [
                'id'    => '28',
                'title' => 'add_game_stastics',
            ],
            [
                'id'    => '29',
                'title' => 'create_matchs',
            ],
            [
                'id'    => '30',
                'title' => 'create_clubs',
            ],
            [
                'id'    => '31',
                'title' => 'manage_club',
            ],
            [
                'id'    => '32',
                'title' => 'manage_events',
            ],
            [
                'id'    => '33',
                'title' => 'manage_match_recored',
            ],
            [
                'id'    => '34',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '35',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '36',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '37',
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => '38',
                'title' => 'manage_staff_user',
            ],
            [
                'id'    => '39',
                'title' => 'lineup_football',
            ],
            [
                'id'    => '40',
                'title' => 'lineup_volleyball',
            ],
            [
                'id'    => '41',
                'title' => 'lineup_basketball',
            ],
            [
                'id'    => '42',
                'title' => 'lineup_tennis',
            ],
            [
                'id'    => '43',
                'title' => 'lineup_baseball',
            ],
            [
                'id'    => '44',
                'title' => 'has_referee',
            ],
            [
                'id'    => '45',
                'title' => 'manage_venues',
            ],
            [
                'id'    => '46',
                'title' => 'user_create',
            ],
            [
                'id'    => '47',
                'title' => 'manage_league',
            ],
            // [
            //     'id'    => '40',
            //     'title' => 'profile_password_edit',
            // ],
            // [
            //     'id'    => '40',
            //     'title' => 'profile_password_edit',
            // ],
            // [
            //     'id'    => '40',
            //     'title' => 'profile_password_edit',
            // ],
            // [
            //     'id'    => '40',
            //     'title' => 'profile_password_edit',
            // ],
        ];

        Permission::insert($permissions);

    }
}
