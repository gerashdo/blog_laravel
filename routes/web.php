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


Route::get('/', function () {
    echo "<a href='". route('nuevo') ."'>Crea usuario</a><br>";
    echo "<a href='". route('nuevo_id',[3]) ."'>Usuario Detalle</a><br>";
    echo "<a href='". route('usuario_clave',["1231", 20]) ."'>Usuario contraseña y edad</a><br>";
})->name('index');

Route::get('usuario/nuevo/', function () {
    echo "<h1>Usuario nuevo</h1><br>";
    echo "<a href='". route('index') ."'>Regresar al index</a><br>";
})->name('nuevo');

Route::get('usuario/{id?}', function ($id=null) {
    echo "<h1>Usuario nuevo con id</h1><br>";
    echo "<a href='". route('index') ."'>Regresar al index</a><br>";
})->name('nuevo_id');


Route::get('/usuario/{clave}/{edad?}', function ($clave, $edad=15) {
    echo "<h1>hola usuario tienes la clave {$clave}, tu edad es {$edad}</h1><br>";
    echo "<a href='". route('index') ."'>Regresar al index</a>";
})->where('edad','[0-9]+')->name('usuario_clave');

