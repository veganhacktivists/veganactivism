<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as BackpackUserCrudController;



/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends BackpackUserCrudController
{

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        parent::setup();
        abort_if(!backpack_user()->hasRole(User::ROLE_SUPER_ADMIN), 403);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    public function setupListOperation()
    {
        parent::setupListOperation();
        $this->crud->addColumn('organizations');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    public function setupCreateOperation()
    {
        parent::setupCreateOperation();
        $this->crud->addField([
            // n-n relationship
            'label' => 'Associated Organizations', // Table column heading
            'type' => 'select2_from_ajax_multiple',
            'name' => 'organizations', // the column that contains the ID of that connected entity
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => 'App\Models\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select a organization(s)', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);

    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    public function setupUpdateOperation()
    {
        parent::setupUpdateOperation();
        $this->crud->addField([
            // n-n relationship
            'label' => 'Associated Organizations', // Table column heading
            'type' => 'select2_from_ajax_multiple',
            'name' => 'organizations', // the column that contains the ID of that connected entity
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => 'App\Models\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select a organization(s)', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
    }
}
