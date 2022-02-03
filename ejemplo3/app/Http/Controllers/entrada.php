<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entrada extends Controller
{
    public function dentro(){
    	return view('estasDentro');
    }
}
