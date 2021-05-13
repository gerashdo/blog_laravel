<?php

use Illuminate\Support\Facades\Route;

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

$nombre="Gerardo";
    $materias = [
        'frameworks',
        'Arquitectura',
        'Bases de datos',
        'Algoritmos'
    ];
    // var_dump(compact('nombre','materias'));
    // die();
    // dd(compact('nombre','materias'));
Route::view('/', 'index',compact('nombre','materias'))->name('index');

Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/editar', 'editar')->name('editar');
Route::view('/archivo', 'archivo')->name('archivo');

