<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbonneeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourneeController;
use App\Http\Controllers\BranchementController;
use App\Http\Controllers\ReclamationController;

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
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/accueil', function () {
        return view('accueil');
    }); Route::get('/get-abonnee-info', [AbonneeController::class,'getAbonneeInfo'])->name('get.abonnee.info');
    Route::resource('abonnees', AbonneeController::class);
    Route::resource('branchements', BranchementController::class);
    Route::resource('reclamations', ReclamationController::class);

});

require __DIR__ . '/auth.php';
