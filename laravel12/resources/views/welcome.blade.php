@extends('layouts.app')
@section('content')
<div class="hero-section mb-5" style="margin-left: -15px; margin-right: -15px;">
    <div  class="animate-up">
        <h1 class="display-2 fw-bold mb-3">Welcome to My World</h1>
        <p class="fs-4 opacity-75">Workshop Pemrograman Framework</p>
        <a href="{{ route('contact.page') }}" class="btn btn-gradient btn-lg mt-4 shadow">Work With Me</a>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Apa Yang Saya Kerjakan?</h2>
        <div class="mx-auto" style="width: 80px; height: 4px; background: var(--primary-color); border-radius: 2px;"></div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card custom-card p-4 text-center h-100">
                <div class="mb-3">
                    <i class="fas fa-code fa-3x text-primary"></i>
                </div>
                <h4 class="fw-bold">Web Development</h4>
                <p class="text-muted">Membangun website responsif dan fungsional menggunakan Laravel dan Bootstrap.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card p-4 text-center h-100">
                <div class="mb-3">
                    <i class="fas fa-paint-brush fa-3x text-primary"></i>
                </div>
                <h4 class="fw-bold">UI/UX Design</h4>
                <p class="text-muted">Mendesain antarmuka pengguna yang bersih, modern, dan ramah pengguna.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card p-4 text-center h-100">
                <div class="mb-3">
                    <i class="fas fa-database fa-3x text-primary"></i>
                </div>
                <h4 class="fw-bold">Backend Logic</h4>
                <p class="text-muted">Mengelola database dan logika server yang aman dan terintegrasi.</p>
            </div>
        </div>
    </div>
</div>
@endsection