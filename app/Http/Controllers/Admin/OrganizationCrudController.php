<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OrganizationRequest as StoreRequest;
use App\Http\Requests\OrganizationRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class OrganizationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OrganizationCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Organization');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/organization');
        $this->crud->setEntityNameStrings('organization', 'organizations');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        //Columns
        $this->crud->addColumn(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addColumn(['name' => 'slug', 'type' => 'text', 'label' => 'Slug']);
        $this->crud->addColumn(['name' => 'about', 'type' => 'text', 'label' => 'About']);
        $this->crud->addColumn(['name' => 'activism', 'type' => 'textarea', 'label' => 'Activism']);
        $this->crud->addColumn( ['name' => 'call_to_action', 'type' => 'text', 'label' => 'Call to Action']);
        $this->crud->addColumn(['name' => 'card_content', 'type' => 'text', 'label' => 'Card Content']);
        $this->crud->addColumn(['name' => 'image_card_url', 'type' => 'text', 'label' => 'Card Image url']);
        $this->crud->addColumn(['name' => 'image_full_url', 'type' => 'text', 'label' => 'Full Image url']);

        // Fields
        $this->crud->addField(['name' => 'title', 'type' => 'text', 'label' => 'Title']);
        $this->crud->addField(['name' => 'slug', 'type' => 'text', 'label' => 'Slug']);
        $this->crud->addField(['name' => 'image_card_url', 'type' => 'url', 'label' => 'Card Image url']);
        $this->crud->addField(['name' => 'image_full_url', 'type' => 'url', 'label' => 'Full Image url']);
        $this->crud->addField( ['name' => 'call_to_action', 'type' => 'textarea', 'label' => 'Call to Action']);
        $this->crud->addField(['name' => 'card_content', 'type' => 'textarea', 'label' => 'Card Content']);
        $this->crud->addField(['name' => 'about', 'type' => 'summernote', 'label' => 'About']);
        $this->crud->addField(['name' => 'activism', 'type' => 'summernote', 'label' => 'Activism']);

        // add asterisk for fields that are required in OrganizationRequest
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
