<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LinkRequest;
use App\Models\BackpackUser;
use App\Models\Link;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LinkCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LinkCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Link::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/link');
        CRUD::setEntityNameStrings('link', 'links');
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
        $this->crud->addColumn([
             'name' => 'type',
             'label' => 'Link Type',
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
        CRUD::setValidation(LinkRequest::class);
        CRUD::field([
            'name' => 'url',
            'type' => 'text',
            'label' => 'URL',
        ]);
        CRUD::field([
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
                Link::TYPE_EMAIL => ucwords(Link::TYPE_EMAIL),
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
            'model' => 'App\Models\Organization', // foreign key model
            'data_source' => url('organizations'), // url to controller search function (with /{id} should return model)
            'placeholder' => 'Select the organization', // placeholder for the select
            'minimum_input_length' => 2, // minimum characters to type before querying results
        ];

        // /* @var \App\Models\BackpackUser $user */
        $user = backpack_user();
        if ($user->hasRole(BackpackUser::ROLE_ADMIN) && $user->organizations()->count() === 1) {
            $organizationSelectField['default'] = $this->user->organizations()->first()->id;
        }

        $this->crud->addField($organizationSelectField);

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
}
