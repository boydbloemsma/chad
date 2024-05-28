<?php

use App\Models\Room;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/register')->group(function () {
    Route::get('/', \App\Http\Controllers\Authentication\Register\IndexController::class)
        ->name('register');
    Route::post('/', \App\Http\Controllers\Authentication\Register\StoreController::class)
        ->name('register.store');
});

Route::prefix('/login')->group(function () {
    Route::get('/', \App\Http\Controllers\Authentication\Login\IndexController::class)
        ->name('login');
    Route::post('/', \App\Http\Controllers\Authentication\Login\StoreController::class)
        ->name('login.store');
});

Route::post('/logout', \App\Http\Controllers\Authentication\Logout\IndexController::class)
    ->name('logout.index');

Route::delete('/account', \App\Http\Controllers\Account\DestroyController::class)
    ->name('account.destroy');

Route::middleware('auth')
    ->prefix('/rooms')
    ->group(function () {
        Route::get('/', \App\Http\Controllers\Rooms\IndexController::class)
            ->name('rooms.index');
        Route::post('/', \App\Http\Controllers\Rooms\StoreController::class)
            ->name('rooms.store');
        Route::get('/{room:slug}', \App\Http\Controllers\Rooms\ShowController::class)
            ->middleware('belongsToRoom')
            ->name('rooms.show');
    });

Route::get('/dashboard', function () {
    $rooms = Room::all();
    return view('dashboard', compact('rooms'));
})->middleware('auth')->name('dashboard');
