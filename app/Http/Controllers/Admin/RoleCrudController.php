<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
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
        $this->user = backpack_user();

        if (!$this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            abort(403);
        }

        parent::setup();
    }
}
