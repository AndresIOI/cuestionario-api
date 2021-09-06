<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Questionnaire;
use App\Models\Student;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function show($id) {
      try {

        $questionnaire = Questionnaire::find($id);
        $questions = $questionnaire->questions()->with('options')->get();
        $data = ['questionnaire' => $questionnaire, 'questions' => $questions];
      
        return response()->json($data, 200);

      } catch (\Illuminate\Database\QueryException $ex) {

        dd($ex->getMessage());
      
      }
    }

    public function storageAnswers(Request $request) {

      try {
        $student = new Student();
        $student->name = $request->name;
        $student->genere = $request->genere;
        $student->group_id = $request->group_id;
        $student->save();
  
        $newAnswers = [];
        foreach ($request->answers as $answer) {
          foreach ($answer as $key => $value) {
            $newAnswers[$key] = ['option_id'=>$value];
          }
        }
        $student->questions()->attach($newAnswers);

        return response()->json('ok', 200);

      } catch (\Illuminate\Database\QueryException $ex) {

        dd($ex->getMessage());
      
      }

    }

    public function getAllResultsByGroup($id) {
      $students = Group::find($id)->students;
      $mujueres = 0;
      $hombres = 0;
      $hombresAtencionSentimientos = ['baja' => 0, 'media' => 0, 'demasiada' => 0];
      $hombresClaridadEmocional = ['baja' => 0, 'media' => 0, 'demasiada' => 0];
      $hombresReparacionEmociones = ['baja' => 0, 'media' => 0, 'demasiada' => 0];

      $mujeresAtencionSentimientos = ['baja' => 0, 'media' => 0, 'demasiada' => 0];
      $mujeresClaridadEmocional = ['baja' => 0, 'media' => 0, 'demasiada' => 0];
      $mujeresReparacionEmociones = ['baja' => 0, 'media' => 0, 'demasiada' => 0];

      foreach ($students as $key => $student) {
        $atencion_sentimientos = 0;
        $claridad_emocional = 0;
        $reparacion_emociones = 0;
        foreach ($student->questions as $key => $question) {

          switch ($question->number) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
              $atencion_sentimientos += $question->pivot['option_id'];
              break;
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
              $claridad_emocional += $question->pivot['option_id'];
              break;
              case 17:
              case 18:
              case 19:
              case 20:
              case 21:
              case 22:
              case 23:
              case 24:
                $reparacion_emociones += $question->pivot['option_id'];
                  break;
            default:

              break;
          }
        }
        if ($student->genere == 'male') {
          if($atencion_sentimientos <= 21) {
            $hombresAtencionSentimientos['baja']++;
          } else if($atencion_sentimientos >= 22 && $atencion_sentimientos <= 32 ) {
            $hombresAtencionSentimientos['media']++;
          } else if ($atencion_sentimientos >= 33) {
            $hombresAtencionSentimientos['demasiada']++;
          }
      
          if($claridad_emocional <= 25) {
            $hombresClaridadEmocional['baja']++;
          } else if($claridad_emocional >= 26 && $claridad_emocional <= 35 ) {
            $hombresClaridadEmocional['media']++;
          } else if ($claridad_emocional >= 36) {
            $hombresClaridadEmocional['demasiada']++;
          }
      
          if($reparacion_emociones <= 23) {
            $hombresReparacionEmociones['baja']++;
          } else if($reparacion_emociones >= 24 && $reparacion_emociones <= 35 ) {
            $hombresReparacionEmociones['media']++;
          } else if ($reparacion_emociones >= 36) {
            $hombresReparacionEmociones['demasiada']++;
          }
          $hombres++;
        } else if ($student->genere == 'female') {
          if($atencion_sentimientos <= 24) {
            $mujeresAtencionSentimientos['baja']++;
          } else if($atencion_sentimientos >= 25 && $atencion_sentimientos <= 35 ) {
            $mujeresAtencionSentimientos['media']++;
          } else if ($atencion_sentimientos >= 36) {
            $mujeresAtencionSentimientos['demasiada']++;
          }
      
          if($claridad_emocional <= 23) {
            $mujeresClaridadEmocional['baja']++;
          } else if($claridad_emocional >= 24 && $claridad_emocional <= 34 ) {
            $mujeresClaridadEmocional['media']++;
          } else if ($claridad_emocional >= 35) {
            $mujeresClaridadEmocional['demasiada']++;
          }
      
          if($reparacion_emociones <= 23) {
            $mujeresReparacionEmociones['baja']++;
          } else if($reparacion_emociones >= 24 && $reparacion_emociones <= 34 ) {
            $mujeresReparacionEmociones['media']++;
          } else if ($reparacion_emociones >= 35) {
            $mujeresReparacionEmociones['demasiada']++;
          }
          $mujueres++;
        }

      }
      $datos = [
        'atencion' => [
          'hombres' => $hombresAtencionSentimientos,
          'mujeres' => $mujeresAtencionSentimientos
        ],
        'claridad' => [
          'hombres' => $hombresClaridadEmocional,
          'mujeres' => $mujeresClaridadEmocional
        ],
        'reparacion' => [
          'hombres' => $hombresReparacionEmociones,
          'mujeres' => $mujeresReparacionEmociones
        ],
        'mujeres' => $mujueres,
        'hombres' => $hombres
      ];
      return response()->json($datos, 200);
    }

    public function getStudentsByGroup($id) {
      $students = Group::find($id)->students;
      return response()->json($students, 200);
    }

    public function getStudentsByid($id) {
      $student = Student::find($id);
      $atencion_sentimientos = 0;
      $claridad_emocional = 0;
      $reparacion_emociones = 0;
      foreach ($student->questions as $key => $question) {
     
        switch ($question->number) {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
          case 8:
            $atencion_sentimientos += $question->pivot['option_id'];
            break;
          case 9:
          case 10:
          case 11:
          case 12:
          case 13:
          case 14:
          case 15:
          case 16:
            $claridad_emocional += $question->pivot['option_id'];
            break;
            case 17:
            case 18:
            case 19:
            case 20:
            case 21:
            case 22:
            case 23:
            case 24:
              $reparacion_emociones += $question->pivot['option_id'];
                break;
          default:

            break;
        }
      }

      $datos = [
        'student' => $student,
        'atencion' => $atencion_sentimientos,
        'claridad' => $claridad_emocional,
        'reparacion' => $reparacion_emociones
      ];
      return response()->json($datos, 200);
    }
}
