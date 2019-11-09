<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LinkRequest as StoreRequest;
use App\Http\Requests\LinkRequest as UpdateRequest;
use App\Link;
use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Facades\Auth;

/**
 * Class LinkCrudController.
 *
 * @property CrudPanel $crud
 */
class LinkCrudController extends CrudController
{
    private $user;

    public function setup()
    {
        $this->user = Auth::user();

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
                Link::TYPE_CONTACT => ucwords(Link::TYPE_CONTACT),
                Link::TYPE_EVENTS => ucwords(Link::TYPE_EVENTS),
                Link::TYPE_VOLUNTEER => ucwords(Link::TYPE_VOLUNTEER),
                Link::TYPE_REDDIT => ucwords(Link::TYPE_REDDIT),
                Link::TYPE_NEWSLETTER => ucwords(Link::TYPE_NEWSLETTER),
            ],
            'allows_null' => false,
            'default' => 'one',
        ]);

        $organizationSelectField = [
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
        ];

        if ($this->user->hasRole(BackpackUser::ROLE_ADMIN) && $this->user->organizations()->count() === 1) {
            $organizationSelectField['default'] = $this->user->organizations()->first()->id;
        }

        $this->crud->addField($organizationSelectField);

        $this->manageButtons();

        // add asterisk for fields that are required in LinkRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    // Manage default buttons by setting access
    private function manageButtons()
    {
        if (!$this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->denyAccess('delete');
        }
    }

    // Override the search method that displays records in the links table
    public function search()
    {
        $user = $this->user;

        if (!$user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->addClause('whereHas', 'organization', function ($query) use ($user) {
                $query->whereHas('users', function ($query) use ($user) {
                    $query->where('id', $user->id);
                });
            });
        }

        return parent::search();
    }

    // Override the edit method that displays the form for updating an organization
    public function edit($id)
    {
        $user = $this->user;

        if (!$user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $organization = $user->organizations()->where('id', $this->crud->getEntry($id)->organization_id)->first();

            abort_if(!$organization, 403);
        }

        return parent::edit($id);
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
