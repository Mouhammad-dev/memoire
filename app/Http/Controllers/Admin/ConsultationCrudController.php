<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ConsultationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ConsultationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ConsultationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Consultation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/consultation');
        CRUD::setEntityNameStrings('consultation', 'consultations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('symptomes');
        CRUD::column('tension_arterielle');
        CRUD::column('temperature');
        CRUD::column('pouls');
        CRUD::column('frequence_respiratoire');
        CRUD::column('poids');
        CRUD::column('glycemie');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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
        CRUD::setValidation(ConsultationRequest::class);

        CRUD::field('symptomes');
        CRUD::field('tension_arterielle');
        CRUD::field('temperature');
        CRUD::field('pouls');
        CRUD::field('frequence_respiratoire');
        CRUD::field('poids');
        CRUD::field('glycemie');
        CRUD::addField([
            'name'    => 'pathologie_id',
            'label'   => 'Pathologie ',
            'type'    => 'select',
            'entity'    => 'pathologies',
            'model'     => "App\Models\Pathologie",
            'attribute' => 'name',
        ]);
        CRUD::addField([
            'name'    => 'medicament_id',
            'label'   => 'Medicament ',
            'type'    => 'select',
            'entity'    => 'medicaments',
            'model'     => "App\Models\Medicament",
            'attribute' => 'name',
        ]);
        CRUD::addField([
            'name'    => 'user_id',
            'label'   => 'Email du patient ',
            'type'    => 'select',
            'entity'    => 'user',
            'model'     => "App\Models\User",
            'attribute' => 'email',
            'options' => (function ($query) {
                return $query->where('type', 'patient')->get();
            }),
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
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
}
