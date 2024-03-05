<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IdeaRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IdeaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IdeaCrudController extends CrudController
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
        abort_if(!backpack_user()->hasRole(User::ROLE_SUPER_ADMIN), 403);
        CRUD::setModel(\App\Models\Idea::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/idea');
        CRUD::setEntityNameStrings('idea', 'ideas');
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
        $this->crud->addColumn('description');
        $this->crud->addColumn([
            'name' => 'color',
            'type' => 'color',
            'label' => 'Color Code (HEX)',

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
        CRUD::setValidation(IdeaRequest::class);
        $this->crud->addField('title');
        $this->crud->addField([
            'name' => 'description',
            'type' => 'textarea',
        ]);
        $this->crud->addField([
            'name' => 'color',
            'type' => 'color',
            'label' => 'Color Code (HEX)',
            'default' => '#000000',
        ]);
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
