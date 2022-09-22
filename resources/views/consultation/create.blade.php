@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class=" col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Nouvelle consultation
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('consultation.store') }} " method="post">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="user_id">

                            <div class="row mt-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Pouls</label>
                                        <input type="text" class="form-control" name="pouls" id=""
                                            aria-describedby="helpId" placeholder="60 battements par minute">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Fréquence respiratoire</label>
                                        <input type="text" class="form-control" name="frequence_respiratoire" id=""
                                            aria-describedby="helpId" placeholder="30 cycles par minute">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Température corporelle</label> °C
                                        <input type="text" class="form-control" name="temperature" id=""
                                            aria-describedby="helpId" placeholder="37°C">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Tension Arterielle</label>
                                        <input type="text" class="form-control" name="tension_arterielle" id=""
                                            aria-describedby="helpId" placeholder="14,5/9 ou 145/90 mmHg">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="dropdown">
                                        <div class="form-group">
                                            <label for="">Type de consultation</label>
                                            <select name="type_consultations" id="type_consultations">
                                                <option value="Consultation en présentiel">Consultation en présentiel</option>
                                                <option value="Consultation en Visio">Consultation en Visio</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Symptomes</label>
                                            <textarea class="form-control" name="symptomes" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Médicaments prescrits</label>
                                        <textarea class="form-control" name="medicament_prescrits" id="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Historique Maladie</label>
                                        <textarea class="form-control" name="historique_maladie" id="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="fa fa-file" aria-hidden="true"></i>
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
