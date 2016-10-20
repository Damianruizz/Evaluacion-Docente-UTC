<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Alumno')->insert([
            'Nombre' => 'Samuel',
            'Apellido_Paterno'  => 'Flores',
            'Apellido_Materno'   => 'Martinez',
            'Contrasena'      => '405040',
            'Matricula' => '405-040',
            'Grupo_id' => 2,
        ]);

        DB::table('Alumno')->insert([
            'Nombre' => 'Pedro',
            'Apellido_Paterno'  => 'Infante',
            'Apellido_Materno'   => 'Luna',
            'Contrasena'      => '401040',
            'Matricula' => '401-040',
            'Grupo_id' => 3,
        ]);

        DB::table('Alumno')->insert([
            'Nombre' => 'Israel',
            'Apellido_Paterno'  => 'Jaitovich',
            'Apellido_Materno'   => 'Mata',
            'Contrasena'      => '402040',
            'Matricula' => '402-040',
            'Grupo_id' => 4,
        ]);

        DB::table('Alumno')->insert([
            'Nombre' => 'Cristiano',
            'Apellido_Paterno'  => 'Ronaldo',
            'Apellido_Materno'   => 'Contreras',
            'Contrasena'      => '403040',
            'Matricula' => '403-040',
            'Grupo_id' => 5,
        ]);

        DB::table('Alumno')->insert([
            'Nombre' => 'Julio',
            'Apellido_Paterno'  => 'Jaramillo',
            'Apellido_Materno'   => 'Perez',
            'Contrasena'      => '404040',
            'Matricula' => '404-040',
            'Grupo_id' => 6,
        ]);
    }
}
