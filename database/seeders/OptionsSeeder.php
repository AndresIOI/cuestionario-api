<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('options')->insert([
            'name' => 'Nada de acuerdo'
        ]);

        DB::table('options')->insert([
            'name' => 'Algo de acuerdo'
        ]);

        DB::table('options')->insert([
            'name' => 'Bastante de acuerdo'
        ]);

        DB::table('options')->insert([
            'name' => 'Muy de acuerdo'
        ]);

        DB::table('options')->insert([
            'name' => 'Totalmente de acuerdo'
        ]);
    }
}
