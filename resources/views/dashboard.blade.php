@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

                <div class="datetime">
                  <div class="time"></div>
                  <div class="date"></div>
                </div>
                <style>
                    body {
                        background: white;
                        text-align: center;
                        }

                        .datetime {
                        font-size: 5px;
                        padding: 24px;
                        color: black;
                        background: white;
                        box-shadow: 0 0 10px white;
                        border-radius: 4px;
                        border-right: 10px white solid;
                        width: 400px;
                        font-weight: 500;
                        font-family: "Inter", sans-serif;
                        }

                        .time {
                        font-size: 3em;
                        color: #BEFF33;;
                        }

                        .date {
                        margin-top: 12px;
                        font-size: 1.75em;
                        }

                </style>
                <script>
                    const timeElement = document.querySelector(".time");
                    const dateElement = document.querySelector(".date");

                    /**
                     * @param {Date} date
                     */
                    function formatTime(date) {
                    const hours12 = date.getHours() % 12 || 12;
                    const minutes = date.getMinutes();
                    const isAm = date.getHours() < 12;

                    return `${hours12.toString().padStart(2, "0")}:${minutes
                        .toString()
                        .padStart(2, "0")} ${isAm ? "" : ""}`;
                    }

                    /**
                     * @param {Date} date
                     */
                    function formatDate(date) {
                    const DAYS = [
                        "Lundi",
                        "Mardi",
                        "Mercredi",
                        "Jeudi",
                        "Vendredi",
                        "Samedi",
                        "Dimanche"
                    ];
                    const MONTHS = [
                        "Janvier",
                        "Février",
                        "Mars",
                        "Avril",
                        "Mai",
                        "Juin",
                        "Juillet",
                        "Août",
                        "Septembre",
                        "Octobre",
                        "Novembre",
                        "Decembre"
                    ];

                    return `${DAYS[date.getDay()]}, ${date.getDate()}  ${
                        MONTHS[date.getMonth()]
                    }  ${date.getFullYear()}`;
                    }

                    setInterval(() => {
                    const now = new Date();

                    timeElement.textContent = formatTime(now);
                    dateElement.textContent = formatDate(now);
                    }, 200);

                </script>
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
