<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');
