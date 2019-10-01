<?php

namespace App\Http\Controllers\Admin;

use App\Models\BackpackUser;
use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\YoutubeVideoRequest as StoreRequest;
use App\Http\Requests\YoutubeVideoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Facades\Auth;

/**
 * Class YoutubeVideoCrudController.
 *
 * @property CrudPanel $crud
 */
class YoutubeVideoCrudController extends CrudController
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
        $this->crud->setModel('App\Models\YoutubeVideo');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/youtubevideo');
        $this->crud->setEntityNameStrings('youtubevideo', 'youtube_videos');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn(['name' => 'url', 'type' => 'url', 'label' => 'URL']);

        $this->crud->addField(['name' => 'url', 'type' => 'url', 'label' => 'URL']);

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

        // add asterisk for fields that are required in YoutubeVideoRequest
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

    // Override the search method that displays records in the youtube_videos table
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

    // Manage default buttons by setting access
    private function manageButtons()
    {
        if (!$this->user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $this->crud->denyAccess('delete');
        }
    }
}
