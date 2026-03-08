@extends('layouts.app')

@section('content')
    <div class="row justify-content-center animate-up">
        <div class="col-md-9">
            <div class="card custom-card overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-4 bg-primary d-flex align-items-center justify-content-center p-5 text-white">
                        <div class="text-center">
                            <div class="rounded-circle bg-white p-2 d-inline-block shadow-lg mb-3">
                              <img src="{{ asset('img/me.jpeg') }}" class="rounded-circle" width="100" height="100" style="object-fit: cover;" alt="Foto Profil Saya">
                            </div>
                            <h4 class="fw-bold">{{ $profile->name }}</h4>
                            <p class="small opacity-75">Teknik Informatika</p>
                        </div>
                    </div>
                    <div class="col-md-8 p-5">
                        <h2 class="fw-bold text-dark mb-3">About Me</h2>
                        <p class="text-muted">
                            {{ $profile->bio }}
                        </p>

                        <hr class="my-4 opacity-25">

                        <div class="row text-center mb-4">
                            <div class="col-4">
                                <h5 class="fw-bold text-primary mb-0">3+</h5>
                                <small class="text-muted">Projects</small>
                            </div>
                            <div class="col-4 border-start border-end">
                                <h5 class="fw-bold text-primary mb-0">2024</h5>
                                <small class="text-muted">Angkatan</small>
                            </div>
                            <div class="col-4">
                                <h5 class="fw-bold text-primary mb-0">AI</h5>
                                <small class="text-muted">Interest</small>
                            </div>
                        </div>

                        <h6 class="fw-bold mb-3">Tech Stack :</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge rounded-pill bg-light text-primary border px-3 py-2">Laravel</span>
                            <span class="badge rounded-pill bg-light text-primary border px-3 py-2">Bootstrap 5</span>
                            <span class="badge rounded-pill bg-light text-primary border px-3 py-2">MySQL</span>
                            <span class="badge rounded-pill bg-light text-primary border px-3 py-2">Next.JS</span>
                            <span class="badge rounded-pill bg-light text-primary border px-3 py-2">Git & GitHub</span>
                        </div>

                        <div class="mt-5">
                            <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-4">
                                <i class="fas fa-arrow-left me-2"></i> Kembali ke Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
