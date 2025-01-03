<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\MatcheController;
use App\Http\Controllers\Admin\ClassementController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {//middleware(['auth'])->
    // Team Routes
    Route::resource('teams', TeamController::class);
    
    // Player Routes
    Route::resource('players', PlayerController::class);

    // Match Routes
    Route::resource('matches', MatcheController::class);

    // Classement Routes
    // Route::get('classements', [ClassementController::class, 'index'])->name('classements.index');
    Route::resource('classements', ClassementController::class);
});

