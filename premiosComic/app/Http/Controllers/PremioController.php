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
       $p->portada="";
       $p->user_id = Auth::User()->id;
       $p->save();

       return redirect()->route('dashboard');

        
    }

    public function mispremios(){

        $premios = premio::where('user_id', Auth::User()->id)->get();

        return view('/mispremios',['listaPremios' => $premios]);

    }
}
