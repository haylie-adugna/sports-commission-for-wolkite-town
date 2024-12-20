<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserTypesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(EventsTableSeeder::class);
        // $this->call(GamesTableSeeder::class);
        // //$this->call(ContactsTableSeeder::class);


        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            // TeamsTableSeeder::class,
            // AssetsTableSeeder::class,
        ]);
        
        // // \App\Models\User::factory(10)->create();
        // \App\Models\Events::factory(10)->create();
        // \App\Models\Games::factory(10)->create();
        // //\App\Models\Contacts::factory(10)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
