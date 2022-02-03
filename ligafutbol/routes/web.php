<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;

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

Route::get('/clasificacion',[EquipoController::class,'clasificacion'])->middleware(['auth'])->name('clasificacion');

//la controladora es equipo controller((la ruta es listado))

Route::get('/crearEquipo',[EquipoController::class,'crear'])->middleware(['auth'])->name('crearEquipo');

Route::get('/guardarEquipo',[EquipoController::class,'guardar'])->middleware(['auth'])->name('guardarEquipo');

Route::get('/partidoNuevo',[PartidoController::class ,'crear'])->middleware(['auth'])->name('partidoNuevo');

Route::get('/guardarPartido',[PartidoController::class ,'modifClasificacion'])->middleware(['auth'])->name('guardarPartido');

require __DIR__.'/auth.php';
