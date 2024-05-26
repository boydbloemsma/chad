<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/login')->group(function () {
    Route::get('/', \App\Http\Controllers\Authentication\Login\IndexController::class)
        ->name('login');
    Route::post('/', \App\Http\Controllers\Authentication\Login\StoreController::class)
        ->name('login.store');
});

Route::get('/logout', \App\Http\Controllers\Authentication\Logout\IndexController::class)
    ->name('logout.index');

Route::middleware('auth')
    ->prefix('/rooms')
    ->group(function () {
        Route::get('/', \App\Http\Controllers\Rooms\IndexController::class)
            ->name('rooms.index');
        Route::post('/', \App\Http\Controllers\Rooms\StoreController::class)
            ->name('rooms.store');
        Route::get('/{room:slug}', \App\Http\Controllers\Rooms\ShowController::class)
            ->name('rooms.show');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

