<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\premio;
use App\Models\User;

class PremioController extends Controller{

    public function listado(){

        $premios = premio::All()->sortByDesc('anio');

        return view('/dashboard',['listaPremios' => $premios]);
    }

    public function formCrearPremio(){

        return view('/crearPremio');

    }


    public function crearPremio(Request $datos){

       $p = new premio();

       $p->anio = $datos->anio;
       $p->autor = $datos->autor;
       $p->comic = $datos->titulo;
       $p->portada=$datos->portada;
       $p->user_id = Auth::User()->id;
       $p->save();

       return redirect()->route('dashboard');

        
    }

    public function mispremios(){

        
        $lp = Auth::User()->premios;

        return view('/mispremios',['listaPremios' => $lp]);

    }
    public function borrarId($id){
    	$p= premio::find($id);
    	if($p->user_id == Auth::User()->id){
    		$p->delete();
    	}

    	$lp =Auth::User()->premios;
    	return view('mispremios',['listaPremios'=>$lp]);

    }
    public function modificarId($id){
    	$p = premio::find($id);
    	if($p->user_id == Auth::User()->id){
    		return view('crearPremio',['premmio'=>$p]);
    	}else{
    		return view('mispremios',['listaPremios'=> auth::User()->premios]);

    	}
    }
}
