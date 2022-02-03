<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\entrada;
use App\Http\Controllers\operaciones;
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

Route::view('/', 'formularioOperaciones');
Route::get('/operacion',[operaciones::class,'operacion']);


Route::get('/suma/{op1}/{op2}',[operaciones::class,'suma'])->where(['op1' => '[0-9]+','op2' => '[0-9]+']);;
Route::get('/resta/{op1}/{op2}',[operaciones::class,'resta'])->where(['op1' => '[0-9]+','op2' => '[0-9]+']);;
Route::get('/multiplicacion/{op1}/{op2}',[operaciones::class,'multiplicacion'])->where(['op1' => '[0-9]+','op2' => '[0-9]+']);;
Route::get('/division/{op1}/{op2}',[operaciones::class,'division'])->where(['op1' => '[0-9]+','op2' => '[0-9]+']);;

 
