<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'user1',
        	'email' => 'user1@correo.net',
        	'password' => Hash::make('user1')
        ]);
         DB::table('users')->insert([
        	'name' => 'user2',
        	'email' => 'user2@correo.net',
        	'password' => Hash::make('user2')
        ]);
    }
}
