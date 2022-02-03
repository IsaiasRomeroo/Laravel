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

Route::view('/','entrada');

Route::get('/camino1',function(){ 
	return 'Hola del GET';
});

Route::get('/camino2',function(){ 
	return view('entrada');
});

Route::get('/camino3/casa2/puertaB/piso3',function(){ 
	return view('entrada');
});

Route::get('/camino4/{valor1}',function($valor1){ 
	return $valor1;
});

Route::get('/camino5/{acum}',function($acum){
	$valor=$acum;
    $acum++; 
	return view('contador',['contador'=>$acum,'valor'=>$valor]);
})->where('acum','[0-9]+');

Route::get('/camino6/{acum}',function($acum){
	$valor=$acum;
    $acum--; 
	return view('contador',['contador'=>$acum,'valor'=>$valor]);
})->where('acum','[0-9]+');

Route::get('/camino7/{var1?}',function($var1='abc'){
	return view('opcional',['opcion' =>$var1]);
});
//redirige a los caminos sin barras
Route::redirect('camino10','camino1');

Route::fallback(function(){
	return view('fallo');

});