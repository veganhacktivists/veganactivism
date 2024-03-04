<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrganizationRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;

/**
 * Class OrganizationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrganizationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Organization::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/organization');
        CRUD::setEntityNameStrings('organization', 'organizations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn('title');
        $this->crud->addColumn('slug');
        $this->crud->addColumn('about');

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(OrganizationRequest::class);
        CRUD::field('title')->type('text');
        CRUD::field('slug')->type('text');
        CRUD::field('image_full_url')->label('Full Image url')->type('text');
        CRUD::field('call_to_action')->label('Call to Action')->type('textarea');
        CRUD::field('card_content')->label('Card Content')->type('textarea');
        CRUD::field('about')->type('summernote');
        CRUD::field('activism')->type('summernote');
        $user = backpack_user();
        if ($user->hasRole(User::ROLE_SUPER_ADMIN)) {
            CRUD::field('featured')->type('checkbox');
            CRUD::field(['name' => 'users', 'type' => 'relationship', 'label' => 'Organization Admins', 'entity' => 'users', 'attribute' => 'name', 'model' => 'App\Models\User', 'pivot' => true]);
        }

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
        $this->crud->addColumn('title');
        $this->crud->addColumn('slug');
        $this->crud->addColumn('about');
        $this->crud->addColumn(['name' => 'activism', 'type' => 'summernote']);
        $this->crud->addColumn(['name' => 'call_to_action', 'label' => 'Call to Action' ,  'type' => 'summernote']);
        $this->crud->addColumn(['name' => 'card_content', 'label' => 'Card Content' ,  'type' => 'summernote']);
        $this->crud->addColumn(['name' => 'image_full_url', 'label' => 'Image url']);
        $this->crud->addColumn('featured');


    }
}
