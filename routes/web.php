<?php

use Illuminate\Support\Facades\Route;

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'site'])->name('site');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
});
