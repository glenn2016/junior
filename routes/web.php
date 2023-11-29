<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/apprenant', [App\Http\Controllers\ApprenantController::class, 'index'])->name('apprenant.index');
Route::get('/apprenant/ajout', [ApprenantController::class, 'create'])->name('ajout');
Route::get('/apprenant/formation', [ApprenantController::class, 'formation'])->name('formation');
Route::post('/store', [ApprenantController::class, 'store']);
Route::get('/apprenant/{id}', [ApprenantController::class, 'show'])->name('apprenant.show');
