<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        // Depends on Roles
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(IdeasTableSeeder::class);
        $this->call(YoutubeVideosTableSeeder::class);
        $this->call(VisitorRegistryTableSeeder::class);
        \App\Link::where(['type' => \App\Link::TYPE_WEBSITE])->get()->each(function ($link) {
            $link->increment('click_count', 30);
        });
    }
}
