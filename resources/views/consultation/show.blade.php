@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Consultation
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <table class="table">
                                            <thead>
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

                                                    <th colspan="3">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($consultations as $consultation)
                                                    <tr>
                                                        <td scope="row"> {{ $consultation->id }} </td>
                                                        <td> {{ $consultation->user_id }}</td>
                                                        <td> {{ $consultation->symptomes }}</td>
                                                        <td> {{ $consultation->medicament_prescrits }}</td>
                                                        <td> {{ $consultation->historique_maladie }} </td>
                                                        <td> {{ $consultation->tension_arterielle }} </td>
                                                        <td> {{ $consultation->temperature }} </td>
                                                        <td> {{ $consultation->pouls }} </td>
                                                        <td> {{ $consultation->frequence_respiratoire }} </td>
                                                        <td> {{ $consultation->type_consultations }} </td>

                                                        {{-- <td>
                                                            <a href=" {{ route('consultation.show', compact('consultations')) }} "
                                                                class="btn btn-outline-primary">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </td> --}}

                                                        <td>
                                                            <a href=" {{ route('consultation.edit', compact('consultations')) }} "
                                                                class="btn btn-outline-warning">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            </a>
                                                        </td>

                                                        <td>
                                                            <button type="button" class="btn btn-outline-danger">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </td>
                                                    @empty
                                                        <p>Aucune consultation pour ce patient</p>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
