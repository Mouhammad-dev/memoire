@extends('layouts.app')
@section('content')
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Rendez-vous ( xxx )</h2>
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-plus" aria-hidden="true"></i> Nouveau rv
                    </a>
                </p>
                @if (session()->has('storeRv'))
                    <div class="alert alert-primary" role="alert">
                        <strong>{{ session()->get('storeRv') }}</strong>
                    </div>
                @endif
                @if (session()->has('updateRv'))
                    <div class="alert alert-primary" role="alert">
                        <strong>{{ session()->get('updateRv') }}</strong>
                    </div>
                @endif
                @if (session()->has('deleteRv'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ session()->get('deleteRv') }}</strong>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <form action=" {{ route('rv.store') }} " class="php-email-form" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Libelle du document</label>
                                            <input type="text" name="name" required id="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Algorithme et Programmation 1" aria-describedby="helpId">
                                            @error('name')
                                                <small id="helpId" class="form-text text-danger">
                                                    {{ $errors->first('name') }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Libelle du document</label>
                                            <input type="text" name="name" required id="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Algorithme et Programmation 1" aria-describedby="helpId">
                                            @error('name')
                                                <small id="helpId" class="form-text text-danger">
                                                    {{ $errors->first('name') }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-outline-primary btn-block">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2" data-aos="zoom-in" data-aos-delay="100">
                {{-- @forelse ($documents as $document) --}}
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-2">
                    <div class="course-item">
                        <img src="../../images/about-bg.jpg" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4> xxx </h4>
                            </div>
                            <h3><a href=""> xxx
                                </a>
                            </h3>
                            <p> xxx </p>
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                                <span></span>
                                <span class="badge bg-primary"> xxx </span>
                            </div>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Publié le: xxx </span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <a href="  " class="btn btn-primary">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    &nbsp;
                                    <a href="  " class="btn btn-warning">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    &nbsp;
                                    {{-- <form action=" {{ route('document.destroy', compact('document')) }} "
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @empty --}}
                <p>
                    Aucun rv pour l'instant. Créez-en!
                </p>
                <section id="hero" class="d-flex align-items-center">
                    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
                        <iframe src="https://embed.lottiefiles.com/animation/73061"></iframe>
                    </div>
                </section>
                {{-- @endforelse --}}
            </div>
            {{-- {{ $documents->links() }} --}}
        </div>
    </section><!-- End Popular Courses Section -->
@endsection
