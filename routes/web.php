<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\MedicosApiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [IndexController::class,'index'])->name('index');
// Route::get('/acerca', [IndexController::class,'acerca'])->name('acerca');
// Route::get('/editar', EditarController::class)->name('editar');
// Route::view('/archivo', 'archivo')->name('archivo');
// Route::get('/hola',[EjemploController::class, 'hola'])->name('hola');

// Route::resource('medicos', MedicosController::class);
Route::apiResource('medicos', MedicosApiController::class);