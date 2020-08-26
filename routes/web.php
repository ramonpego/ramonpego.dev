<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
Route::get('/', [\App\Http\Controllers\HomeController::class, 'site'])->name('site');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
