<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function promedio_carrera($carrera, $maestro){

        $evaluacion_carrera = EvaluacionModel::where('Profesor_id', $maestro['idProfesor'])->where('carrera', $carrera)->get();
        
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



    public function results($profesor)
    {
        //Encontrar al maestro en la base de datos
        $maestro = ProfesorModel::where('idProfesor', $profesor)->first();
        //where de todas las calificaciones de ese maestro
        $evaluacion = EvaluacionModel::where('Profesor_id', $maestro['idProfesor'])->get();

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

            //Promedio Modulo 1
            $count = 0;
            $sum_modulo1 = 0;

            foreach($evaluacion as $clave => $valor){
                $number1 = $evaluacion[$clave];
                $sum_modulo1 += $number1['modulo1'];
            }


            $diez1 = $sum_modulo1 * 10;
            $prim1 = $diez1 / 20;

            $prom_modulo1 = $prim1/$num_evaluaciones;    


            //Promedio Modulo 2
            $count = 0;
            $sum_mod2 = 0;

            foreach($evaluacion as $key => $value){
                
                $number2 = $evaluacion[$key];
                $sum_mod2 += $number2['modulo2'];
            }

            $diez2 = $sum_mod2 * 10;
            $prim2 = $diez2 / 20;

            $prom_modulo2 = $prim2/$num_evaluaciones;    


            //Promedio Modulo 3
            $count = 0;
            $sum_mod3 = 0;

            foreach($evaluacion as $key => $value){
                
                $number3 = $evaluacion[$key];
                $sum_mod3 += $number3['modulo3'];
            }

            $diez3 = $sum_mod3 * 10;
            $prim3 = $diez3 / 24;

            $prom_modulo3 = $prim3/$num_evaluaciones; 


            //Promedio Modulo 4
            $count = 0;
            $sum_mod4 = 0;

            foreach($evaluacion as $key => $value){
                
                $number4 = $evaluacion[$key];
                $sum_mod4 += $number4['modulo4'];
            }

            $diez4 = $sum_mod4 * 10;
            $prim4 = $diez4 / 20;

            $prom_modulo4 = $prim4/$num_evaluaciones;


            //Promedio Modulo 5
            $count = 0;
            $sum_mod5 = 0;

            foreach($evaluacion as $key => $value){
                
                $number5 = $evaluacion[$key];
                $sum_mod5 += $number5['modulo5'];
            }

            $diez5 = $sum_mod5 * 10;
            $prim5 = $diez5 / 12;

            $prom_modulo5 = $prim5/$num_evaluaciones;
            

            //Promedio Modulo 6
            $count = 0;
            $sum_mod6 = 0;

            foreach($evaluacion as $key => $value){
                
                $number6 = $evaluacion[$key];
                $sum_mod6 += $number6['modulo6'];
            }

            $diez6 = $sum_mod6 * 10;
            $prim6 = $diez6 / 12;

            $prom_modulo6 = $prim6/$num_evaluaciones;


            //Promedio Modulo 7
            $count = 0;
            $sum_mod7 = 0;

            foreach($evaluacion as $key => $value){
                
                $number7 = $evaluacion[$key];
                $sum_mod7 += $number7['modulo7'];
            }

            $diez7 = $sum_mod7 * 10;
            $prim7 = $diez7 / 28;

            $prom_modulo7 = $prim7/$num_evaluaciones;
                
            $sistemas = $this->promedio_carrera('Ing. En Sistemas Computacionales', $maestro);
            $turismo = $this->promedio_carrera('Turismo', $maestro);
            $admon = $this->promedio_carrera('Administracion de Empresas', $maestro);
            $diseno = $this->promedio_carrera('Diseño Grafico', $maestro);
            $pedagogia = $this->promedio_carrera('Pedagogia', $maestro);
            $derecho = $this->promedio_carrera('Derecho', $maestro);
            $contabilidad = $this->promedio_carrera('Contabilidad', $maestro);

            //$carrera = CarreraModel::where('idCarrera', $idCarrera)->first();
            //return dd($idCarrera);
            return View::make("admin/results", array("maestro" => $maestro, "num_evaluaciones" => $num_evaluaciones, "promedio" => $promedio, "prom_modulo1" => $prom_modulo1, "prom_modulo2" => $prom_modulo2, "prom_modulo3" => $prom_modulo3, "prom_modulo4" => $prom_modulo4, "prom_modulo5" => $prom_modulo5, "prom_modulo6" => $prom_modulo6, "prom_modulo7" => $prom_modulo7, "sistemas" => $sistemas, "turismo" => $turismo, "admon" => $admon, "diseno" => $diseno, "pedagogia" => $pedagogia, "derecho" => $derecho, "contabilidad" => $contabilidad));
        } else {

            return View::make("admin/nullevaluation", array("maestro" => $maestro));
        }


        //sumarla y dividirla por el .length
        //Y ese promedio de ese maestro se lo muestro en la vosta al administrador
    }

    public function boolean()
    {
        $option = Input::get('admin_option');
        $admin = User::where('User', 'Admin')->first();
        //$admin = User::find(1);

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
    }

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


    public function carrera_prof($idCarrera)
    {
        $carrera = CarreraModel::where('idCarrera', $idCarrera)->first();

        //$maestros = EvaluacionModel::where('Profesor_id', $maestro['idProfesor'])->where('carrera', $carrera)->get();
        $grupos = GrupoModel::where('idCarrera', $carrera['idCarrera'])->get();

        $array = array();
        //array_push($array, "manzana", "arándano");

        $asignados = Profesor_Grupo::all();
        $count = 0;

        $num_grupos = count($grupos);

        $result = $this->counter($count, $array, $asignados, $grupos, $num_grupos);

        $maestros = array_unique($result);

        //return dd($maestros);
        return View::make("admin/profesor_carrera", array("carrera" => $carrera, "maestros" => $maestros));
    }

    public function counter($count, $array, $asignados, $grupos, $num_grupos)
    {
        foreach($asignados as $clave => $valor){

            $number = $asignados[$clave];

            if ($number['Grupo_id'] == $grupos[$count]['idGrupo']){
                array_push($array, ProfesorModel::where('idProfesor', $number['Profesor_id'])->first());
            }
        }
        
        $count += 1;
        
        if ($count < $num_grupos){

            return $this->counter($count, $array, $asignados, $grupos, $num_grupos);
        } else {
            return $array;
        }
    }

    public function getcomment($idProfesor)
    {
        //return "HOLA AMIGO";
        $comentarios = CommentModel::where('Profesor_id', $idProfesor)->get();
        $profesor = ProfesorModel::where('idProfesor', $idProfesor)->first();

        return View::make("admin/comments", array("comentarios" => $comentarios, "profesor" => $profesor));
    }
}