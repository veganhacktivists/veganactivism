<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OrganizationRequest as StoreRequest;
use App\Http\Requests\OrganizationRequest as UpdateRequest;
use App\Models\BackpackUser;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Facades\Auth;

/**
 * Class OrganizationCrudController.
 *
 * @property CrudPanel $crud
 */
class OrganizationCrudController extends CrudController
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
        $this->crud->setModel('App\Organization');
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
        $this->crud->addColumn(['name' => 'call_to_action', 'type' => 'text', 'label' => 'Call to Action']);
        $this->crud->addColumn(['name' => 'card_content', 'type' => 'text', 'label' => 'Card Content']);
        $this->crud->addColumn(['name' => 'image_full_url', 'type' => 'text', 'label' => 'Image url']);
        $this->crud->addColumn(['name' => 'featured', 'type' => 'checkbox', 'label' => 'Featured']);

        // Fields
        $this->crud->addField(
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'Title',
                'attributes' => [
                    'placeholder' => 'Organization title',
                ],
            ]
        );
        $this->crud->addField(
            [
                'name' => 'slug',
                'type' => 'text',
                'label' => 'Slug',
                'attributes' => [
                    'placeholder' => 'Organization slug',
                ],
            ]
        );
        $this->crud->addField([
            'name' => 'image_full_url',
            'type' => 'url',
            'label' => 'Full Image url',
            'attributes' => [
                'placeholder' => 'URL to full banner image (1280x386)',
            ],
        ]);
        $this->crud->addField([
            'name' => 'call_to_action',
            'type' => 'textarea',
            'label' => 'Call to Action (max 65 characters)',
            'attributes' => [
                'placeholder' => 'Call to action text',
                'maxLength' => 65
            ],
            ''
        ]);
        $this->crud->addField([
            'name' => 'card_content',
            'type' => 'textarea',
            'label' => 'Card Content (max 125 characters)',
            'attributes' => [
                'placeholder' => 'Card content',
                'maxLength' => 125
            ],
        ]);
        $this->crud->addField([
            'name' => 'about',
            'type' => 'summernote',
            'label' => 'About',
            'attributes' => [
                'placeholder' => 'About the organization',
            ],
        ]);
        $this->crud->addField([
            'name' => 'activism',
            'type' => 'summernote',
            'label' => 'Activism',
            'attributes' => [
                'placeholder' => 'Type of activism',
            ],
        ]);

        if ($this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->addField([
                'name' => 'featured',
                'type' => 'checkbox',
                'label' => 'Featured',
            ]);

            $this->crud->addField([
                // n-n relationship
                'label' => 'Organization Admins', // Table column heading
                'type' => 'select2_from_ajax_multiple',
                'name' => 'users', // the column that contains the ID of that connected entity
                'entity' => 'user', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => 'App\User', // foreign key model
                'data_source' => url('users'), // url to controller search function (with /{id} should return model)
                'placeholder' => 'Select a user', // placeholder for the select
                'minimum_input_length' => 2, // minimum characters to type before querying results
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            ]);
        }

        $this->manageButtons();

        // add asterisk for fields that are required in OrganizationRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    // Manage default buttons by setting access
    private function manageButtons()
    {
        $this->crud->allowAccess('show');

        if (!$this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->denyAccess('create');
            $this->crud->denyAccess('delete');
        }
    }

    // Override the search method that displays records in the organizations table
    public function search()
    {
        $user = $this->user;

        if (!$user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->addClause('whereHas', 'users', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            });
        }

        return parent::search();
    }

    // Override the edit method that displays the form for updating an organization
    public function edit($id)
    {
        $user = $this->user;

        if (!$user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $organization = $user->organizations()->where('id', $id)->first();

            abort_if(!$organization, 403);
        }

        return parent::edit($id);
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $request->merge(['image_card_url' => $request->input('image_full_url')]);
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $request->merge(['image_card_url' => $request->input('image_full_url')]);
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
