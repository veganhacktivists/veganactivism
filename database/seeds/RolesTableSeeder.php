<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role = Role::create(['name' => User::ROLE_SUPER_ADMIN]);
        $superAdminPermissionIds = Permission::whereIn('name', [
            User::PERMISSION_USERS_VIEW,
            User::PERMISSION_USERS_CREATE,
            User::PERMISSION_USERS_EDIT,
            User::PERMISSION_USERS_DELETE,
            User::PERMISSION_ORGANIZATIONS_VIEW,
            User::PERMISSION_ORGANIZATIONS_CREATE,
            User::PERMISSION_ORGANIZATIONS_EDIT,
            User::PERMISSION_ORGANIZATIONS_DELETE,
            User::PERMISSION_LINKS_VIEW,
            User::PERMISSION_LINKS_CREATE,
            User::PERMISSION_LINKS_EDIT,
            User::PERMISSION_LINKS_DELETE,
            User::PERMISSION_NAVBAR_VIEW,
        ])->pluck('id')->toArray();
        $role->permissions()->attach($superAdminPermissionIds);

        $role = Role::create(['name' => User::ROLE_ADMIN]);
        $adminPermissionIds = Permission::whereIn('name', [
            User::PERMISSION_ORGANIZATIONS_VIEW,
            User::PERMISSION_ORGANIZATIONS_EDIT,
            User::PERMISSION_LINKS_VIEW,
            User::PERMISSION_LINKS_CREATE,
            User::PERMISSION_LINKS_EDIT,
            User::PERMISSION_NAVBAR_VIEW,
        ])->pluck('id')->toArray();
        $role->permissions()->attach($adminPermissionIds);
    }
}
