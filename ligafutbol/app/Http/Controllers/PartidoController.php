<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;

class PartidoController extends Controller
{
    public function crear(){
        return view('formPartido', ['listaEquipos' => Equipo::All()]);
    }

    public function modifClasificacion(Request $datosPartido){

        //buscar el modelo del equipo1
        $equipo1 = Equipo::find($datosPartido->equipo1);

        //buscar el modelo del equipo2
        $equipo2 = Equipo::find($datosPartido->equipo2);

        //modificar los goles del equipo1
        $equipo1->gf = $equipo1->gf + $datosPartido->ge1;
        $equipo1->gc = $equipo1->gc + $datosPartido->ge2;

        //modificar los goles del equipo2
        $equipo2->gf = $equipo2->gf + $datosPartido->ge2;
        $equipo2->gc = $equipo2->gc + $datosPartido->ge1;

        if ($equipo1->id != $equipo2-id){

            if($datosPartido->ge1 > $datosPartido->ge2){

                //tres puntos para el equipo 1
                $equipo1->puntos = $equipo1->puntos + 3;

            }else if($datosPartido->ge2 > $datosPartido->ge1){

                //tres puntos para el equipo 2
                $equipo2->puntos = $equipo2->puntos + 3;

            }else{

                //un punto para cada uno
                $equipo1->puntos = $equipo1->puntos + 1;
                $equipo2->puntos = $equipo2->puntos + 1;

            }
        }

        //salvar el equipo1
        $equipo1->save();
        //salvar el equipo2
        $equipo2->save();

        return redirect()->route('clasificacion');
    }
}