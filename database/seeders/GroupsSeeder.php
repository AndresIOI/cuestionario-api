<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groups')->insert([
            'name' => '3-A',
            'user_id' => 3
        ]);

        DB::table('groups')->insert([
            'name' => '3-B',
            'user_id' => 4
        ]);
    }
}
