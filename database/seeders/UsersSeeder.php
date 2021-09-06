<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Andres',
        //     'email' => 'andres_ioi@hotmail.com',
        //     'password'=> app('hash')->make("hola123"),
        //     'rol_id' => 1
        // ]);
    }
}
