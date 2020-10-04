<?php

use Illuminate\Support\Facades\Route;

Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', [\App\Http\Controllers\Site\HomeController::class, 'index'])->name('home');
Route::get('posts', [\App\Http\Controllers\Site\PostController::class, 'index'])->name('posts');
Route::get('contacts', [\App\Http\Controllers\Site\ContactController::class, 'index'])->name('contact');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Site\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
});
