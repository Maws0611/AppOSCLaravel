<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\paysController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pays', [PaysController::class, 'index']);

// Route::get('/entreprise/index', [EntrepriseController::class, 'index'])->middleware(['auth'])->name('entreprise.index');
// Route::get('/entreprise/create', [EntrepriseController::class, 'create'])->middleware(['auth'])->name('entreprise.create');
// Route::post('/entreprise/store', [EntrepriseController::class, 'store'])->middleware(['auth'])->name('entreprise.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';