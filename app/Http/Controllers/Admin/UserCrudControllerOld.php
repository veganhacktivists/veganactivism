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

        abort_if(!$this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN), 403);

        parent::setup();

        $this->crud->addField([
            // n-n relationship
            'label' => 'Associated Organizations', // Table column heading
            'type' => 'select2_from_ajax_multiple',
            'name' => 'organizations', // the column that contains the ID of that connected entity
            'entity' => 'organization', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => 'App\Models\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select a organization(s)', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
    }
}
