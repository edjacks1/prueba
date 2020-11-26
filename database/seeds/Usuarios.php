<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Seeder
{

    public function run(){
        DB::table('users')->insert([
            'name'     => 'Usuario',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
