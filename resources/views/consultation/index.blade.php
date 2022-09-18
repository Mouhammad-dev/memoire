@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>
                    Liste des consultations
                </h3>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col d-flex justify-content-start">
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Recherche">
            </div> --}}
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('consultation.create') }} " class="btn btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Nouvelle consultation
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
                                    Symptomes
                                </th>

                                <th>
                                    Médicaments prescrits
                                </th>

                                <th>
                                    Historique Maladie
                                </th>

                                <th>
                                    Tension Arterielle
                                </th>

                                <th>
                                    Température
                                </th>

                                <th>
                                    Pouls
                                </th>

                                <th>
                                    Fréquence Respiratoire
                                </th>

                                <th>
                                    Type de consultation
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

                            @forelse ($consultations as $consultations)
                                <tr>
                                    <th>
                                        {{ $id++ }}
                                    </th>

                                    <td>
                                        {{ $consultations->symptomes }}
                                    </td>

                                    <td>
                                        {{ $consultations->medicament_prescrits }}
                                    </td>

                                    <td>
                                        {{ $consultations->historique_maladie }}
                                    </td>

                                    <td>
                                        {{ $consultations->tension_arterielle }}
                                    </td>

                                    <td>
                                        {{ $consultations->temperature }}
                                    </td>

                                    <td>
                                        {{ $consultations->pouls }}
                                    </td>

                                    <td>
                                        {{ $consultations->frequence_respiratoire }}
                                    </td>

                                    <td>
                                        {{ $consultations->type_consultations }}
                                    </td>

                                    <td>
                                        <a href=" {{ route('consultation.edit', compact('consultations')) }} "
                                            class="btn btn-outline-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </td>

                                    <td>
                                        <form action=" {{ route('consultation.destroy', compact('consultations')) }} "
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
                                    Aucune consultation trouvée
                                </p>
                            @endforelse

                        </tbody>

                        <tfoot class="table-dark">
                            <tr>
                                <th>
                                    #
                                </th>

                                <th>
                                    Symptomes
                                </th>

                                <th>
                                    Médicaments prescrits
                                </th>

                                <th>
                                    Historique Maladie
                                </th>

                                <th>
                                    Tension Arterielle
                                </th>

                                <th>
                                    Température
                                </th>

                                <th>
                                    Pouls
                                </th>

                                <th>
                                    Fréquence Respiratoire
                                </th>

                                <th>
                                    Type de consultation
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
