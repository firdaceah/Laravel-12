<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('home');

Route::get('/about', [ProfileController::class, 'about'])->name('about.page');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
