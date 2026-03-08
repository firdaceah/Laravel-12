@extends('layouts.app')

@section('content')
<div class="row justify-content-center animate-up">
    <div class="col-md-6">
        <div class="card custom-card p-4">
            <h2 class="fw-bold mb-4 text-center">Contact Me</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" rows="4" placeholder="Tulis pesan..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 rounded-pill">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection