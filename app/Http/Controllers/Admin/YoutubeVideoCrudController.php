<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\YoutubeVideoRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class YoutubeVideoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class YoutubeVideoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\YoutubeVideo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/youtube-video');
        CRUD::setEntityNameStrings('youtube video', 'youtube videos');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'url',
            'label' => 'URL',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(YoutubeVideoRequest::class);
        $this->crud->addField([
            'name' => 'url',
            'label' => 'URL',
            'type' => 'url',
        ]);
        $organizationSelectField = [
            // 1-n relationship
            'label' => 'Organization', // Table column heading
            'type' => 'select2_from_ajax',
            'name' => 'organization_id', // the column that contains the ID of that connected entity
            'entity' => 'organization', // the method that defines the relationship in the Model
            'attribute' => 'title', // foreign key attribute that is shown to the user
            'model' => 'App\Models\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select the organization', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
        ];

        $user = backpack_user();
        if ($user->hasRole(User::ROLE_ADMIN) && $user->organizations()->count() === 1) {
            $organizationSelectField['default'] = $this->user->organizations()->first()->id;
        }

        $this->crud->addField($organizationSelectField);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->crud->addColumn('url', 'URL');
        $this->crud->addColumn([
            'name' => 'organization.title',
            'label' => 'Organization',
        ]);
    }
}
