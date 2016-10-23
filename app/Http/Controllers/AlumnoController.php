<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use View;
use App\GrupoModel;
use App\AlumnoModel;
use App\CommentModel;
use App\Profesor_Grupo;
use App\CarreraModel;
use App\TurnoModel;
use App\EvaluacionModel;
use App\ProfesorModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = ProfesorModel::all();
        return View::make("alumno/helloa", array("maestros" => $maestros));
    }

   
    public function insert_comment()
    {
        $profesor = Input::get('profesor');
        $carrera = Input::get('carrera');
        $comentario = Input::get('comentario');
        $alumno_id = Input::get('alumno');

        $carrera_id = CarreraModel::where('descripcion', $carrera)->first();

        $comment = new CommentModel;

        $comment->comentario = $comentario;
        $comment->Profesor_id = $profesor;
        $comment->Carrera_id = $carrera_id['id'];

        $comment->save();

        return $this->home($alumno_id);
    }
    
    
    public function surveyresponse()
    {
        $response_alumno = [
            'uno' => Input::get('uno'),
            'dos' => Input::get('dos'),
            'tres' => Input::get('tres'),
            'cuatro' => Input::get('cuatro'),
            'cinco' => Input::get('cinco'),
            'seis' => Input::get('seis'),
            'siete' => Input::get('siete'),
            'ocho' => Input::get('ocho'),
            'nueve' => Input::get('nueve'),
            'diez' => Input::get('diez'),
            'once' => Input::get('once'),
            'doce' => Input::get('doce'),
            'trece' => Input::get('trece'),
            'catorce' => Input::get('catorce'),
            'quince' => Input::get('quince'),
            'dieciseis' => Input::get('dieciseis'),
            'diecisiete' => Input::get('diecisiete'),
            'dieciocho' => Input::get('dieciocho'),
            'diecinueve' => Input::get('diecinueve'),
            'veinte' => Input::get('veinte'),
            'veintiuno' => Input::get('veintiuno'),
            'veintidos' => Input::get('veintidos'),
            'veintitres' => Input::get('veintitres'),
            'veinticuatro' => Input::get('veinticuatro'),
            'veinticinco' => Input::get('veinticinco'),
            'veintiseis' => Input::get('veintiseis'),
            'veintisiete' => Input::get('veintisiete'),
            'veintiocho' => Input::get('veintiocho'),
            'veintinueve' => Input::get('veintinueve'),
            'treinta' => Input::get('treinta'),
            'treintayuno' => Input::get('treintayuno'),
            'treintaydos' => Input::get('treintaydos'),
            'treintaytres' => Input::get('treintaytres'),
            'treintaycuatro' => Input::get('treintaycuatro')
        ];

        $profesor = Input::get('profesor');
        $carrera = Input::get('carrera');
        $id_alumno = Input::get('idAlumno');

        $profesor_obj = ProfesorModel::find($profesor);

        $total = 0;

        foreach($response_alumno as $key => $value){
            $total += $value;
        }

        $modulo1 = 0;
        $count = 0;

        foreach($response_alumno as $key => $value){
            if ($count <= 4){
                $modulo1 += $value;        
            }
            $count += 1;
        }

        $modulo2 = $this->count_modulo($response_alumno, 4, 9);
        $modulo3 = $this->count_modulo($response_alumno, 9, 15);
        $modulo4 = $this->count_modulo($response_alumno, 15, 20);
        $modulo5 = $this->count_modulo($response_alumno, 20, 23);
        $modulo6 = $this->count_modulo($response_alumno, 23, 26);
        $modulo7 = $this->count_modulo($response_alumno, 26, 34);

        $evaluacion_alumno = new EvaluacionModel;

        $evaluacion_alumno->evaluacion = $total;
        $evaluacion_alumno->Profesor_id = $profesor;
        $evaluacion_alumno->modulo1 = $modulo1;
        $evaluacion_alumno->modulo2 = $modulo2;
        $evaluacion_alumno->modulo3 = $modulo3;
        $evaluacion_alumno->modulo4 = $modulo4;
        $evaluacion_alumno->modulo5 = $modulo5;
        $evaluacion_alumno->modulo6 = $modulo6;
        $evaluacion_alumno->modulo7 = $modulo7;
        $evaluacion_alumno->carrera = $carrera;

        $evaluacion_alumno->save();

        $alumno = AlumnoModel::find($id_alumno);

        return View::make("alumno/comments", array("profesor" => $profesor_obj, "carrera" => $carrera, "alumno" => $alumno));
    }


    public function count_modulo($response_alumno, $limit, $limit_two){

        $suma = 0;
        $count = 0;
        foreach($response_alumno as $key => $value){
            
            if ($count > $limit && $count <= $limit_two){
                $suma += $value;        
            }
            $count += 1;
        }

        return $suma;
    }


    public function survey($id_profesor, $carrera, $id_alumno)
    {
        $profesor = ProfesorModel::find($id_profesor);
        $alumno = AlumnoModel::find($id_alumno);

        return View::make("alumno/survey", array("profesor" => $profesor, "carrera" => $carrera, "alumno" => $alumno));
    }


    public function home($id){

       $alumno = AlumnoModel::find($id);
       $array = array();

        $asignados = Profesor_Grupo::all();
        $grupo = GrupoModel::where('id', $alumno['Grupo_id'])->first();

        foreach($asignados as $clave => $valor){

            $number = $asignados[$clave];

            if ($number['Grupo_id'] == $grupo['id']){
                array_push($array, ProfesorModel::where('id', $number['Profesor_id'])->first());
            }
        }

       $maestros = array_unique($array);
       $admin = User::where('admin', true)->first();

       $carrera = CarreraModel::find($grupo['Carrera_id']);
       $turno = TurnoModel::find($grupo['Turno_id']);

       return View::make("alumno/helloa", array("alumno" => $alumno, "profesores_data" => $maestros, "grupo" => $grupo, "carrera" => $carrera, "turno" => $turno));
    }
}