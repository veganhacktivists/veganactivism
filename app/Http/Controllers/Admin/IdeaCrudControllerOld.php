<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\IdeaRequest as StoreRequest;
use App\Http\Requests\IdeaRequest as UpdateRequest;
use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;

/**
 * Class IdeaCrudController.
 *
 * @property CrudPanel $crud
 */
class IdeaCrudController extends CrudController
{
    public function setup()
    {
        abort_if(!backpack_user()->hasRole(BackpackUser::ROLE_SUPER_ADMIN), 403);

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Idea');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/idea');
        $this->crud->setEntityNameStrings('idea', 'ideas');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Decription']);
        $this->crud->addColumn(['name' => 'color', 'type' => 'text', 'label' => 'Color Code in HEX']);

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'color',
            'label' => 'Color Code in HEX',
            'type' => 'text',
        ]);

        // add asterisk for fields that are required in IdeaRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
