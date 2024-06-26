<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbonneeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourneeController;
use App\Http\Controllers\BranchementController;
use App\Http\Controllers\ReclamationController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
=======
>>>>>>> 7864392ac40bac7bb1ad278d4604afda2581fea1

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
    Route::get('branchements/{branchement}/pdf', [BranchementController::class, 'pdf'])->name('branchements.pdf');
    Route::get('reclamations/{reclamation}/pdf', [ReclamationController::class, 'generatePdf'])->name('reclamations.pdf');
<<<<<<< HEAD
    Route::get('/accueil', [DashboardController::class, 'index'])->name('accueil');
=======
>>>>>>> 7864392ac40bac7bb1ad278d4604afda2581fea1

});

require __DIR__ . '/auth.php';
