<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RendezVouRequest;
use App\Mail\SendRVNotificationMail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Mail;

/**
 * Class RendezVouCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RendezVouCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RendezVou::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/rendez-vou');
        CRUD::setEntityNameStrings('rendez vou', 'rendez vous');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('date');
        CRUD::column('heure');
        CRUD::column('type');

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
        CRUD::setValidation(RendezVouRequest::class);

        CRUD::field('date');
        CRUD::field('heure');
        CRUD::field('type');
        CRUD::field('reunion_id');
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

        $date = CRUD::field('date');
        $heure = CRUD::field('heure');
        $reunionId = CRUD::field('reunion_id');

        Mail::to('janticipe0101@gmail.com')->send(new SendRVNotificationMail($date, $heure, $reunionId));
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
