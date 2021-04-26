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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('home/registrar', [\App\Http\Controllers\clienteController::class, 'regis'])->name('2');
Route::get('home/registrar', [\App\Http\Controllers\clienteController::class, 'registrarC'])->name('2');
Route::post('home/guardarclientes', [\App\Http\Controllers\clienteController::class, 'guardarC'])->name('1');
Route::get('home/ingresarcategoria',[\App\Http\Controllers\clienteController::class, 'registrarCate'])->name('4');
Route::post('home/guardarcate',[\App\Http\Controllers\clienteController::class, 'guardarCat'])->name('3');
Route::get('home/ingresardepartamento',[\App\Http\Controllers\clienteController::class, 'registrarDe'])->name('6');
Route::post('home/guardardepa',[\App\Http\Controllers\clienteController::class, 'guardarDe'])->name('5');
Route::get('home/ingresargenero',[\App\Http\Controllers\clienteController::class, 'registrarge'])->name('8');
Route::post('home/guardarge',[\App\Http\Controllers\clienteController::class, 'guardarge'])->name('7');
Route::get('home/mostrarcliente',[\App\Http\Controllers\clienteController::class, 'MostrarC'])->name('mostrarcliente');
Route::delete('home/{cliente}',[\App\Http\Controllers\clienteController::class, 'eliminarcliente'])->name('cliente.delete');
Route::get('home/mostrarcategoria',[\App\Http\Controllers\clienteController::class, 'MostrarCate'])->name('mostrarcategoria');
Route::delete('home/{cate}',[\App\Http\Controllers\clienteController::class, 'eliminarcate'])->name('cate.delete');
Route::get('home/mostrardepartamento',[\App\Http\Controllers\clienteController::class, 'MostrarD'])->name('mostrardepar');
Route::delete('home/{depa}',[\App\Http\Controllers\clienteController::class, 'eliminarde'])->name('departamento.delete');
Route::get('home/mostrargenero',[\App\Http\Controllers\clienteController::class, 'Mostrargene'])->name('mostrargenero');
Route::delete('home/{genero1}',[\App\Http\Controllers\clienteController::class, 'eliminarge'])->name('genero.delete');
