<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaragesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContratsController;
use App\Http\Controllers\Model_contratsController;

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

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
// Groupement des routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    // Routes pour le profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour les contrats
    Route::prefix('contrats')->name('contrats.')->group(function () {
        Route::get('/', [ContratsController::class, 'index'])->name('index');
        Route::get('/create', [ContratsController::class, 'create'])->name('create');
        Route::post('/', [ContratsController::class, 'store'])->name('store');
        Route::get('/{id}', [ContratsController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [ContratsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ContratsController::class, 'update'])->name('update');
        Route::delete('/{id}', [ContratsController::class, 'destroy'])->name('destroy');
    });

    // Routes pour les clients
    Route::prefix('clients')->name('clients.')->group(function () {
        Route::get('/', [ClientsController::class, 'index'])->name('index');
        Route::get('/create', [ClientsController::class, 'create'])->name('create');
        Route::post('/', [ClientsController::class, 'store'])->name('store');
        Route::get('/{id}', [ClientsController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [ClientsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ClientsController::class, 'update'])->name('update');
        Route::delete('/{id}', [ClientsController::class, 'destroy'])->name('destroy');
    });

    // Routes pour les garages
    Route::prefix('garages')->name('garages.')->group(function () {
        Route::get('/', [GaragesController::class, 'index'])->name('index');
        Route::get('/create', [GaragesController::class, 'create'])->name('create');
        Route::post('/', [GaragesController::class, 'store'])->name('store');
        Route::get('/{id}', [GaragesController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [GaragesController::class, 'edit'])->name('edit');
        Route::put('/{id}', [GaragesController::class, 'update'])->name('update');
        Route::delete('/{id}', [GaragesController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('model_contrats')->name('model_contrats.')->group(function () {
        Route::get('/', [Model_contratsController::class, 'index'])->name('index');
        Route::get('/create', [Model_contratsController::class, 'create'])->name('create');
        Route::post('/', [Model_contratsController::class, 'store'])->name('store');
        Route::get('/{id}', [Model_contratsController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [Model_contratsController::class, 'edit'])->name('edit');
        Route::put('/{id}', [Model_contratsController::class, 'update'])->name('update');
        Route::delete('/{id}', [Model_contratsController::class, 'destroy'])->name('destroy');
    });

});

// Inclusion des routes d'authentification
require __DIR__.'/auth.php';
