<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EvaluacionModel;

class CarreraController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function results($carrera){

        $evaluacion = EvaluacionModel::where('carrera', $carrera)->get();

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

            //Promedio Modulos 
            $prom_modulo1 = $this->modulos('modulo1', $num_evaluaciones, $evaluacion, 20);
            $prom_modulo2 = $this->modulos('modulo2', $num_evaluaciones, $evaluacion, 20);
            $prom_modulo3 = $this->modulos('modulo3', $num_evaluaciones, $evaluacion, 24);
            $prom_modulo4 = $this->modulos('modulo4', $num_evaluaciones, $evaluacion, 20);
            $prom_modulo5 = $this->modulos('modulo5', $num_evaluaciones, $evaluacion, 12);
            $prom_modulo6 = $this->modulos('modulo6', $num_evaluaciones, $evaluacion, 12);
            $prom_modulo7 = $this->modulos('modulo7', $num_evaluaciones, $evaluacion, 28);

            return View::make("admin/carrera", array("carrera" => $carrera, "num_evaluaciones" => $num_evaluaciones, "promedio" => $promedio, "prom_modulo1" => $prom_modulo1, "prom_modulo2" => $prom_modulo2, "prom_modulo3" => $prom_modulo3, "prom_modulo4" => $prom_modulo4, "prom_modulo5" => $prom_modulo5, "prom_modulo6" => $prom_modulo6, "prom_modulo7" => $prom_modulo7));
        } else {

            return View::make("admin/nullcarrera", array("carrera" => $carrera));
        }
    }

    public function modulos($modulo, $num, $evaluacion, $cien){

        $count = 0;
        $sum_modulo = 0;

        foreach($evaluacion as $clave => $valor){
            $number = $evaluacion[$clave];
            $sum_modulo += $number[$modulo];
        }


        $diez = $sum_modulo * 10;
        $prim = $diez / $cien;

        $prom_modulo = $prim/$num;  
        return $prom_modulo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
