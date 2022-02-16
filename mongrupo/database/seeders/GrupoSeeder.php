<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
        	'nombre'=>'G1',
        	'descripcion'=>'Alumnos del instituto',
        	'cantidad'=>15,
        	'user_id'=>2

        ]);
        DB::table('grupos')->insert([
        	'nombre'=>'G2',
        	'descripcion'=>'jubilados de viaje cultural',
        	'cantidad'=>17,
        	'user_id'=>3

        ]);
        DB::table('grupos')->insert([
        	'nombre'=>'G3',
        	'descripcion'=>'Viajes de asociacion',
        	'cantidad'=>19,
        	'user_id'=>2

        ]);
    }
}
