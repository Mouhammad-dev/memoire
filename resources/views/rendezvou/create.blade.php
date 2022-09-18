@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class=" col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Nouveau rendez-vous
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('dashboard.rendezvous.store') }} " method="post">
                            @csrf
                            <div class="row mt-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" name="date" id="" class="form-control"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Heure</label>
                                        <input type="time" name="time" id="" class="form-control"
                                            aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Patient</label>
                                        <select class="form-control" name="user_id" id="">
                                            @foreach ($patients as $user)
                                                <option value=" {{ $user->id }} "> {{ $user->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Docteur</label>
                                        <select class="form-control" name="docteur" id="">
                                            @foreach ($docteurs as $user)
                                                <option value=" {{ $user->name }} "> {{ $user->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
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
