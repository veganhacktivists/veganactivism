<?php

use App\Models\BackpackUser;
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role = Role::create(['name' => BackpackUser::ROLE_SUPER_ADMIN]);
        $role->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]);

        $role = Role::create(['name' => BackpackUser::ROLE_ADMIN]);
        $role->permissions()->attach([6, 7, 9, 10, 11]);
    }
}
