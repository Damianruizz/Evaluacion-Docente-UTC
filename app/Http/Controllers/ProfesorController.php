<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use View;
use App\User;
use App\AlumnoModel;
use App\ProfesorModel;
use App\CommentModel;
use App\EvaluacionModel;
use App\Profesor_Grupo;
use App\CarreraModel;
use App\GrupoModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProfesorController extends Controller
{

    //Obtiene el promedio de un maestro en una carrera especifica
    public function promedio_carrera($carrera, $maestro){

        $evaluacion_carrera = EvaluacionModel::where('Profesor_id', $maestro['id'])->where('carrera', $carrera)->get();
        
        $sum_total = 0;
        $diez = 0;
        $prim = 0;
        $promedio = 0;

        $num_evaluaciones = count($evaluacion_carrera);

        if ($num_evaluaciones != 0){

            //Promedio General
            foreach($evaluacion_carrera as $key => $value){
                $number = $evaluacion_carrera[$key];
                $sum_total += $number['evaluacion'];
            }
            
            $diez = $sum_total * 10;
            $prim = $diez / 136;

            $promedio = $prim/$num_evaluaciones;

            return $promedio;    
        } else {

            return null;
        }
    }


    public function results($profesor) {

        if (Auth::check()){

            $maestro = ProfesorModel::find($profesor);
            //where de todas las calificaciones de ese maestro
            $evaluacion = EvaluacionModel::where('Profesor_id', $maestro['id'])->get();

            //Obtener cada calificacion
            $sum_total = 0;
            $num_evaluaciones = count($evaluacion);

            if ($num_evaluaciones != 0){

                //Promedio General
                foreach($evaluacion as $key => $value){
                    $number = $evaluacion[$key];
                    $sum_total += $number['evaluacion'];
                }
                
                $diez = $sum_total * 10;
                $prim = $diez / 136;

                $promedio = $prim/$num_evaluaciones;    

                $prom_modulo1 = $this->promedio_modulos($evaluacion, 'modulo1', 20, $num_evaluaciones);  
                $prom_modulo2 = $this->promedio_modulos($evaluacion, 'modulo2', 20, $num_evaluaciones);  
                $prom_modulo3 = $this->promedio_modulos($evaluacion, 'modulo3', 24, $num_evaluaciones);  
                $prom_modulo4 = $this->promedio_modulos($evaluacion, 'modulo4', 20, $num_evaluaciones);  
                $prom_modulo5 = $this->promedio_modulos($evaluacion, 'modulo5', 12, $num_evaluaciones);  
                $prom_modulo6 = $this->promedio_modulos($evaluacion, 'modulo6', 12, $num_evaluaciones);  
                $prom_modulo7 = $this->promedio_modulos($evaluacion, 'modulo7', 28, $num_evaluaciones);  
                    
                $sistemas = $this->promedio_carrera('Ing. En Sistemas Computacionales', $maestro);
                $turismo = $this->promedio_carrera('Turismo', $maestro);
                $admon = $this->promedio_carrera('Administracion de Empresas', $maestro);
                $diseno = $this->promedio_carrera('Diseño Grafico', $maestro);
                $pedagogia = $this->promedio_carrera('Pedagogia', $maestro);
                $derecho = $this->promedio_carrera('Derecho', $maestro);
                $contabilidad = $this->promedio_carrera('Contabilidad', $maestro);

                return View::make("admin/results", array("maestro" => $maestro, "num_evaluaciones" => $num_evaluaciones, "promedio" => $promedio, "prom_modulo1" => $prom_modulo1, "prom_modulo2" => $prom_modulo2, "prom_modulo3" => $prom_modulo3, "prom_modulo4" => $prom_modulo4, "prom_modulo5" => $prom_modulo5, "prom_modulo6" => $prom_modulo6, "prom_modulo7" => $prom_modulo7, "sistemas" => $sistemas, "turismo" => $turismo, "admon" => $admon, "diseno" => $diseno, "pedagogia" => $pedagogia, "derecho" => $derecho, "contabilidad" => $contabilidad));
            } else {

                return View::make("admin/nullevaluation", array("maestro" => $maestro));
            }
        }else {

            return View::make("welcome");
        }
    }

    
    public function promedio_modulos($evaluacion, $modulo, $divisor, $num_evaluaciones){

        $count = 0;
        $sum_modulo = 0;

        foreach($evaluacion as $clave => $valor){
            $number1 = $evaluacion[$clave];
            $sum_modulo += $number1[$modulo];
        }

        $diez1 = $sum_modulo * 10;
        $prim1 = $diez1 / $divisor;

        return $prom_modulo = $prim1/$num_evaluaciones; 
    }  


    public function boolean(){
        
        if (Auth::check()){

            $option = Input::get('admin_option');
            $admin = User::where('admin', true)->first();

            $admin->evaluation = $option;
            $admin->save();

            $alumnos = AlumnoModel::all();
            $profesores_data = ProfesorModel::all();
            $carreras = CarreraModel::all();

            $sistemas = $this->promedio_carreras('Ing. En Sistemas Computacionales');
            $turismo = $this->promedio_carreras('Turismo');
            $admon = $this->promedio_carreras('Administracion de Empresas');
            $diseno = $this->promedio_carreras('Diseño Grafico');
            $pedagogia = $this->promedio_carreras('Pedagogia');
            $derecho = $this->promedio_carreras('Derecho');
            $contabilidad = $this->promedio_carreras('Contabilidad');

            return View::make("admin/hello", array("alumnos" => $alumnos, "maestros" => $profesores_data, "admin" => $admin, "carreras" => $carreras, "sistemas" => $sistemas, "turismo" => $turismo, "admon" => $admon, "diseno" => $diseno, "pedagogia" => $pedagogia, "derecho" => $derecho, "contabilidad" => $contabilidad));
        }else {

            return View::make("welcome");            
        }
    }


    //Obtiene el promedio general de todas las carreras
    public function promedio_carreras($carrera){

        $evaluacion = EvaluacionModel::where('carrera', $carrera)->get();

        $num_evaluaciones = count($evaluacion);

        $count = 0;
        $suma = 0;

        if ($num_evaluaciones > 0) {
            
            foreach($evaluacion as $clave => $valor){
                $number = $evaluacion[$clave];
                $suma += $number['evaluacion'];
            }

            $diez = $suma * 10;
            $prim = $diez / 136;

            $promedio = $prim/$num_evaluaciones;  
            return $promedio;
        } else {

            return null;
        }
    }


    public function carrera_prof($idCarrera){

        if (Auth::check()){

            $carrera = CarreraModel::find($idCarrera);
            $grupos = GrupoModel::where('Carrera_id', $carrera['id'])->get();

            $array = array();

            $asignados = Profesor_Grupo::all();
            $count = 0;

            $num_grupos = count($grupos);

            $result = $this->counter($count, $array, $asignados, $grupos, $num_grupos);

            $maestros = array_unique($result);

            return View::make("admin/profesor_carrera", array("carrera" => $carrera, "maestros" => $maestros));
        } else {

            return View::make("welcome");            
        }
    }

    public function counter($count, $array, $asignados, $grupos, $num_grupos)
    {
        foreach($asignados as $clave => $valor){

            $number = $asignados[$clave];

            if ($number['Grupo_id'] == $grupos[$count]['id']){
                array_push($array, ProfesorModel::where('id', $number['Profesor_id'])->first());
            }
        }
        
        $count += 1;
        
        if ($count < $num_grupos){

            return $this->counter($count, $array, $asignados, $grupos, $num_grupos);
        } else {
            return $array;
        }
    }

    public function getcomment($idProfesor){

        if (Auth::check()){

            $comentarios = CommentModel::where('Profesor_id', $idProfesor)->get();
            $profesor = ProfesorModel::find($idProfesor);

            return View::make("admin/comments", array("comentarios" => $comentarios, "profesor" => $profesor));
        } else {

            return View::make("welcome");                 
        }
    }
}