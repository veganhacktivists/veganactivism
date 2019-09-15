<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        // Depends on Roles
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizationsTableSeederTableSeeder::class);
        $this->call(LinksTableSeeder::class);
    }
}
