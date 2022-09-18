@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="col d-flex justify-content-end">
                    Date et heure : {{ date('h:i:sa -- d/m/Y') }}
                </div>
            </div>
        </div>
    </div>
    <div style="height: 100px"></div>
    <div class="container">
        @if (auth()->user()->is_docteur || auth()->user()->is_admin)
            <div class="row mt-5">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Nombre de patients</div>
                                        @if ($patients)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count ($patients)}}</div>
                                        @endif
                                </div>
                                <div class="col-auto">
                                    <img src="/images/patient.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Rendez-vous</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count ($rendezVous)}}</div>
                                </div>
                                <div class="col-auto">
                                    <img src="/images/medical-appointment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Patients Hommes</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count ($patientHomme)}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="/images/examination.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Patients Femmes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count ($patientFemme)}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="/images/heart-attack.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        @else
            <div class="jumbotron">
                <h1 class="display-3">Bienvenue</h1>
                <p class="lead">Bienvenue sur votre espace personnel cher patient.</p>
                <hr class="my-2">
            </div>
        @endif

    @endsection
