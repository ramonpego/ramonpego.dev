<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/teste', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
