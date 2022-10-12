@extends('layouts.app')
@section('content')
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Mes Consultations ( xxx )</h2>
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
                    Aucune consultation pour l'instant. Créez-en!
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
