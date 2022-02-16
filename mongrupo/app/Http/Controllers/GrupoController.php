<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Grupo;
use App\Models\User;

class GrupoController extends Controller
{
    public function listado()
    {
    	if(Auth::User()->rol=="admin"){

    	  
    	 $grupos = Grupo::All();

    	}else{
    		$grupos= Auth::User()->grupos;

    	}
    	return view('dashboard',['listaGrupos'
    		=> $grupos]);

    }
    public function formCrear(){
    	if(Auth::User()->rol!="admin"){
    		return redirect()->route('dashboard');
    	}

    	$monitores = User::where('rol','monitor')->get();
    	return view('formularioCrear',['listaMonitores'=> $monitores]);

    }

     public function guardar(Request $datos){

     		if(Auth::User()->rol!="admin"){
    		return redirect()->route('dashboard');
    	}

     	$grupo= new Grupo();
     		$grupo->nombre=$datos->nombre;
     		$grupo->descripcion=$datos->desc;
     		$grupo->cantidad=$datos->cant;
     		$grupo->user_id=$datos->user_id;

     		$grupo->save();

     		return redirect()->route('dashboard');
    } 
    
     public function borrar($id){

     		if(Auth::User()->rol!="admin"){
    		return redirect()->route('dashboard');

    		$grupo =grupo::find($id);

    		$grupo->delete();

    		return redirect()->route('dashboard');
   }
}
