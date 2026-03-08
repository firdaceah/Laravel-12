<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('home');

Route::get('/about', [ProfileController::class, 'about'])->name('about.page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');
