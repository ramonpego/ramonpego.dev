<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
