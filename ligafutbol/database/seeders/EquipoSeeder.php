<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('equipos')->insert([
            'nombre' => 'Real Sporting de Gijón',
            'puntos' => 0,
            'gf' => 0,
            'gc' => 0
        ]);
		DB::table('equipos')->insert([
            'nombre' => 'Leganes',
            'puntos' => 0,
            'gf' => 0,
            'gc' => 0
        ]);
        DB::table('equipos')->insert([
            'nombre' => 'Vallecas',
            'puntos' => 0,
            'gf' => 0,
            'gc' => 0
        ]);
        DB::table('equipos')->insert([
            'nombre' => 'Getafe',
            'puntos' => 0,
            'gf' => 0,
            'gc' => 0
        ]);       
    }
}
