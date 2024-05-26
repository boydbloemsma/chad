<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/login')->group(function () {
    Route::get('/', \App\Http\Controllers\Authentication\Login\IndexController::class)
        ->name('login.index');
    Route::post('/', \App\Http\Controllers\Authentication\Login\StoreController::class)
        ->name('login.store');
});

Route::get('/logout', \App\Http\Controllers\Authentication\Logout\IndexController::class)
    ->name('logout.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

