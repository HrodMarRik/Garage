<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaragesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContratsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

    Route::prefix('/contrats')->name('contrats.')->group(function() {
        Route::get('/', [ContratsController::class, 'show'])->name('index');
        Route::get('-read', [ContratsController::class, 'read'])->name('read');
        Route::get('-show', [ContratsController::class, 'show'])->name('show');
        Route::get('-create', [ContratsController::class, 'create'])->name('create');
        Route::get('-edit', [ContratsController::class, 'edit'])->name('edit');
        Route::post('-update', [ContratsController::class, 'update'])->name('update');
        Route::delete('-delete', [ContratsController::class, 'delete'])->name('delete');
    });

    Route::prefix('/clients')->name('clients.')->group(function() {
        Route::get('/', [ClientsController::class, 'show'])->name('index');
        Route::get('-read', [ClientsController::class, 'read'])->name('read');
        Route::get('-show', [ClientsController::class, 'show'])->name('show');
        Route::get('-create', [ClientsController::class, 'create'])->name('create');
        Route::get('-edit', [ClientsController::class, 'edit'])->name('edit');
        Route::post('-update', [ClientsController::class, 'update'])->name('update');
        Route::delete('-delete', [ClientsController::class, 'delete'])->name('delete');
    });

    Route::prefix('/garages')->name('garages.')->group(function() {
        Route::get('/', [GaragesController::class, 'show'])->name('index');
        Route::get('-read', [GaragesController::class, 'read'])->name('read');
        Route::get('-show', [GaragesController::class, 'show'])->name('show');
        Route::get('-create', [GaragesController::class, 'create'])->name('create');
        Route::get('-edit', [GaragesController::class, 'edit'])->name('edit');
        Route::post('-update', [GaragesController::class, 'update'])->name('update');
        Route::delete('-delete', [GaragesController::class, 'delete'])->name('delete');
    });
});

require __DIR__.'/auth.php';
