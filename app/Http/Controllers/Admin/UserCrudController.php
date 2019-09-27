<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController;

/**
 * Class UserCrudController.
 *
 * @property CrudPanel $crud
 */
class UserCrudController extends BackpackUserCrudController
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
