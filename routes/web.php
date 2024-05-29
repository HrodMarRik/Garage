<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaragesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContratsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('contrats')->name('contrats.')->group(function() {
        Route::get('/', [ContratsController::class, 'index'])->name('index');
        Route::get('/{id}', [ContratsController::class, 'show'])->name('show');
        Route::get('/create', [ContratsController::class, 'create'])->name('create');
        Route::post('/', [ContratsController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ContratsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ContratsController::class, 'update'])->name('update');
        Route::delete('/{id}', [ContratsController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('clients')->name('clients.')->group(function() {
        Route::get('/', [ClientsController::class, 'index'])->name('index');
        Route::get('/{id}', [ClientsController::class, 'show'])->name('show');
        Route::get('/create', [ClientsController::class, 'create'])->name('create');
        Route::post('/', [ClientsController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ClientsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ClientsController::class, 'update'])->name('update');
        Route::delete('/{id}', [ClientsController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('garages')->name('garages.')->group(function() {
        Route::get('/', [GaragesController::class, 'index'])->name('index');
        Route::get('/{id}', [GaragesController::class, 'show'])->name('show');
        Route::get('/create', [GaragesController::class, 'create'])->name('create');
        Route::post('/', [GaragesController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [GaragesController::class, 'edit'])->name('edit');
        Route::put('/{id}', [GaragesController::class, 'update'])->name('update');
        Route::delete('/{id}', [GaragesController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__.'/auth.php';
