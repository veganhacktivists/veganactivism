<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Backpack\CRUD\CrudPanel;
use Backpack\PermissionManager\app\Http\Controllers\RoleCrudController as BackpackRoleCrudController;

/**
 * Class RoleCrudController.
 *
 * @property CrudPanel $crud
 */
class RoleCrudController extends BackpackRoleCrudController
{
    private $user;

    public function setup()
    {
        abort_if(!backpack_user()->hasRole(User::ROLE_SUPER_ADMIN), 403);
        parent::setup();
    }
}
