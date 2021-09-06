<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('rols')->insert([
            'name' => 'Admin',
        ]);

        DB::table('rols')->insert([
            'name' => 'Tutor',
        ]);
    }
}
