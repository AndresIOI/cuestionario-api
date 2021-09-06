<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 24; $i++) { 
            DB::table('questions_options')->insert([
                'question_id' => $i,
                'option_id' => 1
            ]);

            DB::table('questions_options')->insert([
                'question_id' => $i,
                'option_id' => 2
            ]);

            DB::table('questions_options')->insert([
                'question_id' => $i,
                'option_id' => 3
            ]);

            DB::table('questions_options')->insert([
                'question_id' => $i,
                'option_id' => 4
            ]);

            DB::table('questions_options')->insert([
                'question_id' => $i,
                'option_id' => 5
            ]);
        }
    }
}
