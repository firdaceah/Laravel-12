@extends('layouts.app')
@section('content')
<div class="hero-section" style="margin-left: -15px; margin-right: -15px;">
    <div>
        <h1 class="display-2 fw-bold mb-3">Welcome to My World</h1>
        <p class="fs-4 opacity-75">Workshop Pemrograman Framework</p>
        <a href="{{ route('about.page') }}" class="btn btn-gradient btn-lg mt-4">Jelajahi Profil Saya</a>
    </div>
</div>
@endsection