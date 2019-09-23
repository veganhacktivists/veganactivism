<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LinkRequest as StoreRequest;
use App\Http\Requests\LinkRequest as UpdateRequest;
use App\Link;
use Backpack\CRUD\CrudPanel;

/**
 * Class LinkCrudController.
 *
 * @property CrudPanel $crud
 */
class LinkCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Link');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/link');
        $this->crud->setEntityNameStrings('link', 'links');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn(['name' => 'url', 'type' => 'url', 'label' => 'URL']);
        $this->crud->addColumn(['name' => 'type', 'type' => 'text', 'label' => 'Link Type']);

        $this->crud->addField(['name' => 'url', 'type' => 'url', 'label' => 'URL']);
        $this->crud->addField([
            'name' => 'type',
            'label' => 'Link Type',
            'type' => 'select2_from_array',
            'options' => [
                Link::TYPE_WEBSITE => ucwords(Link::TYPE_WEBSITE),
                Link::TYPE_FACEBOOK => ucwords(Link::TYPE_FACEBOOK),
                Link::TYPE_INSTAGRAM => ucwords(Link::TYPE_INSTAGRAM),
                Link::TYPE_PATREON => ucwords(Link::TYPE_PATREON),
                Link::TYPE_TWITTER => ucwords(Link::TYPE_TWITTER),
                Link::TYPE_YOUTUBE => ucwords(Link::TYPE_YOUTUBE),
            ],
            'allows_null' => false,
            'default' => 'one',
        ]);

        $this->crud->addField([
            // 1-n relationship
            'label' => 'Organization', // Table column heading
            'type' => 'select2_from_ajax',
            'name' => 'organization_id', // the column that contains the ID of that connected entity
            'entity' => 'organization', // the method that defines the relationship in the Model
            'attribute' => 'title', // foreign key attribute that is shown to the user
            'model' => 'App\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select the organization', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
        ]);

        // add asterisk for fields that are required in LinkRequest
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
