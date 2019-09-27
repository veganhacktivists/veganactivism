<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController as BackpackPermissionCrudController;

/**
 * Class PermissionCrudController.
 *
 * @property CrudPanel $crud
 */
class PermissionCrudController extends BackpackPermissionCrudController
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
