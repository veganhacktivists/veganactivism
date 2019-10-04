<?php

use App\Models\BackpackUser;
use App\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role = Role::create(['name' => BackpackUser::ROLE_SUPER_ADMIN]);
        $superAdminPermissionIds = Permission::whereIn('name', [
            BackpackUser::PERMISSION_USERS_VIEW,
            BackpackUser::PERMISSION_USERS_CREATE,
            BackpackUser::PERMISSION_USERS_EDIT,
            BackpackUser::PERMISSION_USERS_DELETE,
            BackpackUser::PERMISSION_ORGANIZATIONS_VIEW,
            BackpackUser::PERMISSION_ORGANIZATIONS_CREATE,
            BackpackUser::PERMISSION_ORGANIZATIONS_EDIT,
            BackpackUser::PERMISSION_ORGANIZATIONS_DELETE,
            BackpackUser::PERMISSION_LINKS_VIEW,
            BackpackUser::PERMISSION_LINKS_CREATE,
            BackpackUser::PERMISSION_LINKS_EDIT,
            BackpackUser::PERMISSION_LINKS_DELETE,
            BackpackUser::PERMISSION_NAVBAR_VIEW,
        ])->pluck('id')->toArray();
        $role->permissions()->attach($superAdminPermissionIds);

        $role = Role::create(['name' => BackpackUser::ROLE_ADMIN]);
        $adminPermissionIds = Permission::whereIn('name', [
            BackpackUser::PERMISSION_ORGANIZATIONS_VIEW,
            BackpackUser::PERMISSION_ORGANIZATIONS_EDIT,
            BackpackUser::PERMISSION_LINKS_VIEW,
            BackpackUser::PERMISSION_LINKS_CREATE,
            BackpackUser::PERMISSION_LINKS_EDIT,
            BackpackUser::PERMISSION_NAVBAR_VIEW,
        ])->pluck('id')->toArray();
        $role->permissions()->attach($adminPermissionIds);
    }
}
