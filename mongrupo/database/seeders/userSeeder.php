<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin2@correo.net',
            'password' => Hash::make('admin'),
             'rol'=>'admin'
      ]);
   
        DB::table('users')->insert([
            'name' => 'monitor1',
            'email' => 'monitor1@correo.net',
            'password' => Hash::make('monitor1'),
             'rol'=>'monitor'
       ]);
         DB::table('users')->insert([
            'name' => 'monitor2',
            'email' => 'monitor2@correo.net',
            'password' => Hash::make('monitor2'),
             'rol'=>'monitor'
        ]);

     }
}
