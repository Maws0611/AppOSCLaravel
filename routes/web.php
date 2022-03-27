<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\EntrepriseController;
// use App\Http\Controllers\GameController;

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

Route::get('dashboard', [DiagramController::class, 'dashboard'])->name('dashboard');


Route::resource('entreprises', EntrepriseController::class);
