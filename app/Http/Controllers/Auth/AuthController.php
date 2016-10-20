<?php

namespace App\Http\Controllers\Auth;

use Auth;
use View;
use App\User;
use App\AlumnoModel;
use App\ProfesorModel;
use App\CarreraModel;
use App\GrupoModel;
use App\Profesor_Grupo;
use App\CuatrimestreModel;
use App\EvaluacionModel;
use App\TurnoModel;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
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

    public function home(){

        if (Auth::check()){

            $alumnos = AlumnoModel::all();
            $profesores_data = ProfesorModel::all();          
            $admin = User::where('User', 'Admin')->first();

            $carreras = CarreraModel::all();
            $sistemas = $this->promedio_carreras('Ing. En Sistemas Computacionales');
            $turismo = $this->promedio_carreras('Turismo');
            $admon = $this->promedio_carreras('Administracion de Empresas');
            $diseno = $this->promedio_carreras('Diseño Grafico');
            $pedagogia = $this->promedio_carreras('Pedagogia');
            $derecho = $this->promedio_carreras('Derecho');
            $contabilidad = $this->promedio_carreras('Contabilidad');
            return View::make("admin/hello", array("alumnos" => $alumnos, "maestros" => $profesores_data, "admin" => $admin, "carreras" => $carreras, "sistemas" => $sistemas, "turismo" => $turismo, "admon" => $admon, "diseno" => $diseno, "pedagogia" => $pedagogia, "derecho" => $derecho, "contabilidad" => $contabilidad));
        } else {
            
            return View::make("welcome");
        }
    }

    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'user' => Input::get('matricula'),
            'password' => Input::get('password')
        ];

        $matricula = Input::get('matricula');
        $contraseña = Input::get('password');
        
        $alumnos = AlumnoModel::all();

        $profesores_data = ProfesorModel::all();
        


        $admin = User::where('user', 'Admin')->first();
        // Verificamos los datos
        if (Auth::attempt($data)) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            //return "Hola, entro";
            $carreras = CarreraModel::all();
            $sistemas = $this->promedio_carreras('Ing. En Sistemas Computacionales');
            $turismo = $this->promedio_carreras('Turismo');
            $admon = $this->promedio_carreras('Administracion de Empresas');
            $diseno = $this->promedio_carreras('Diseño Grafico');
            $pedagogia = $this->promedio_carreras('Pedagogia');
            $derecho = $this->promedio_carreras('Derecho');
            $contabilidad = $this->promedio_carreras('Contabilidad');
            return View::make("admin/hello", array("alumnos" => $alumnos, "maestros" => $profesores_data, "admin" => $admin, "carreras" => $carreras, "sistemas" => $sistemas, "turismo" => $turismo, "admon" => $admon, "diseno" => $diseno, "pedagogia" => $pedagogia, "derecho" => $derecho, "contabilidad" => $contabilidad));
        } else {
            if ($alumno = AlumnoModel::where('idAlumno', $matricula)->first()) {
                
                if ( $alumno['Contrasena'] == $contraseña ){
                    if ( $admin["evaluation"] != null ){

                        $grupo = GrupoModel::where('idGrupo', $alumno['Grupo_id'])->first();
                        $array = array();
                        //array_push($array, "manzana", "arándano");

                        $asignados = Profesor_Grupo::all();

                        foreach($asignados as $clave => $valor){

                            $number = $asignados[$clave];

                            if ($number['Grupo_id'] == $grupo['idGrupo']){
                                array_push($array, ProfesorModel::where('idProfesor', $number['Profesor_id'])->first());
                            }
                        }

                        $maestros = array_unique($array);

                        $carrera = CarreraModel::where('idCarrera', $grupo['idCarrera'])->first();
                        $cuatrimestre = CuatrimestreModel::where('idCutrimestre', $grupo['idCutrimestre'])->first();
                        $turno = TurnoModel::where('idTurno', $grupo['idTurno'])->first();
                        return View::make("alumno/helloa", array("alumno" => $alumno, "profesores_data" => $maestros, "grupo" => $grupo, "carrera" => $carrera, "turno" => $turno, "cuatrimestre" => $cuatrimestre));
                    } else {
                        return View::make("disabled");
                    }
                } else {
                    return View::make("welcome");
                }    

            } else{
                return View::make("welcome");
            }
            //return View::make("welcome", array("companies" => $companies));
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
    }

    public function logOut()
    {
        if (Auth::check()){

            Auth::logout();    
            return View::make("welcome");
        } else {

            return View::make("welcome");
        }
        // Cerramos la sesión
        
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        // return Redirect::intended('welcome');
    }
}
