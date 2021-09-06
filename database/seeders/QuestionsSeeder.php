<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
            'number' => 1,
            'name' => 'Presto mucha atención a los sentimientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 2,
            'name' => 'Normalmente me preocupo mucho por lo que siento.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 3,
            'name' => 'Normalmente dedico tiempo a pensar en mis emociones.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 4,
            'name' => 'Pienso que merece la pena prestar atención a mis emociones y estado de ánimo.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 5,
            'name' => 'Dejo que mis sentimientos afecten a mis pensamientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 6,
            'name' => 'Pienso en mi estado de ánimo constantemente.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 7,
            'name' => 'A menudo pienso en mis sentimientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 8,
            'name' => 'Presto mucha atención a cómo me siento.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 9,
            'name' => 'Tengo claros mis sentimientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 10,
            'name' => 'Frecuentemente puedo definir mis sentimientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 11,
            'name' => 'Casi siempre sé cómo me siento.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 12,
            'name' => 'Normalmente conozco mis sentimientos sobre las personas.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 13,
            'name' => 'A menudo me doy cuenta de mis sentimientos en diferentes situaciones.',
            'questionnaires_id' => 1
        ]);
        
        DB::table('questions')->insert([
            'number' => 14,
            'name' => 'Siempre puedo decir cómo me siento.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 15,
            'name' => 'A veces puedo decir cuáles son mis emociones.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 16,
            'name' => 'Puedo llegar a comprender mis sentimientos.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 17,
            'name' => 'Aunque a veces me siento triste, suelo tener una visión optimista.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 18,
            'name' => 'Aunque me sienta mal, procuro pensar en cosas agradables.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 19,
            'name' => 'Cuando estoy triste, pienso en todos los placeres de la vida.',
            'questionnaires_id' => 1
        ]);
        
        DB::table('questions')->insert([
            'number' => 20,
            'name' => 'Intento tener pensamientos positivos aunque me sienta mal.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 21,
            'name' => 'Si doy demasiadas vueltas a las cosas, complicándolas, trato de calmarme.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 22,
            'name' => 'Me esfuerzo por tener un buen estado de ánimo.',
            'questionnaires_id' => 1
        ]);
        
        DB::table('questions')->insert([
            'number' => 23,
            'name' => 'Tengo muchas energía cuando me siento feliz.',
            'questionnaires_id' => 1
        ]);

        DB::table('questions')->insert([
            'number' => 24,
            'name' => 'Cuando estoy enfadado intento que se me pase.',
            'questionnaires_id' => 1
        ]);
    }
}
