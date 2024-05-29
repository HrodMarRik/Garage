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

    Route::get('/garages', [GaragesController::class, 'show'])->name('garages');

    Route::get('/clients', [ClientsController::class, 'show'])->name('clients');

    Route::prefix('/contrats')->name('contrats.')->group(function() {

        Route::get('/', [ContratsController::class, 'show'])->name('');
        Route::get('-read', [ContratsController::class, 'read'])->name('read');
    });
});

require __DIR__.'/auth.php';
