<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Users CRUD operation permissions
        Permission::create([
            'name' => User::PERMISSION_USERS_CREATE,
        ]);

        Permission::create([
            'name' => User::PERMISSION_USERS_VIEW,
        ]);

        Permission::create([
            'name' => User::PERMISSION_USERS_EDIT,
        ]);

        Permission::create([
            'name' => User::PERMISSION_USERS_DELETE,
        ]);

        // Organization CRUD operation permissions
        Permission::create([
            'name' => User::PERMISSION_ORGANIZATIONS_CREATE,
        ]);

        Permission::create([
            'name' => User::PERMISSION_ORGANIZATIONS_VIEW,
        ]);

        Permission::create([
            'name' => User::PERMISSION_ORGANIZATIONS_EDIT,
        ]);

        Permission::create([
            'name' => User::PERMISSION_ORGANIZATIONS_DELETE,
        ]);

        // Organization CRUD operation permissions
        Permission::create([
            'name' => User::PERMISSION_LINKS_CREATE,
        ]);

        Permission::create([
            'name' => User::PERMISSION_LINKS_VIEW,
        ]);

        Permission::create([
            'name' => User::PERMISSION_LINKS_EDIT,
        ]);

        Permission::create([
            'name' => User::PERMISSION_LINKS_DELETE,
        ]);
    }
}
