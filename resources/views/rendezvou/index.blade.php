@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>
                    Liste des rendez-vous
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-start">
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Recherche">
                <button type="submit" class="btn ml-2" style="background:#0077fffd; color: white;">Rechercher</button>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('dashboard.rendezvous.create') }} " class="btn btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Nouveau rendez-vous
                </a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>
                                    #
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Heure
                                </th>

                                <th>
                                    Docteur
                                </th>

                                <th>
                                    Description
                                </th>

                                <th colspan="2" class="text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <div class="d-none">
                                {{ $id = 1 }}
                            </div>

                            @forelse ($rendezvous as $rendezvou)
                                <tr>
                                    <th>
                                        {{ $id++ }}
                                    </th>

                                    <td>
                                        {{ $rendezvou->date }}
                                    </td>

                                    <td>
                                        {{ $rendezvou->time }}
                                    </td>

                                    <td>
                                        {{ $rendezvou->docteur }}
                                    </td>

                                    <td>
                                        {{ $rendezvou->description }}
                                    </td>

                                    <td>
                                        <a href=" {{ route('dashboard.rendezvous.edit', compact('rendezvou')) }} "
                                            class="btn btn-outline-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </td>

                                    <td>
                                        <form action=" {{ route('dashboard.rendezvous.destroy', compact('rendezvou')) }} "
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <p>
                                    Aucun rendez-vous trouvé
                                </p>
                            @endforelse
 
                        </tbody>

                        <tfoot class="table-dark">
                            <tr>
                                <th>
                                    #
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Heure
                                </th>

                                <th>
                                    Docteur
                                </th>

                                <th>
                                    Description
                                </th>

                                <th colspan="2" class="text-center">
                                    Actions
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
