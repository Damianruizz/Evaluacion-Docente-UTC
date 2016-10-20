<?php

use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Carrera')->insert([
            'carrera' => 'TUR',
            'descripcion' => 'Turismo',
        ]);

        DB::table('Carrera')->insert([
            'carrera' => 'ADMIN',
            'descripcion' => 'Administracion de Empresas',
        ]);

        DB::table('Carrera')->insert([
            'carrera' => 'DIS',
            'descripcion' => 'Diseño Grafico',
        ]);

        DB::table('Carrera')->insert([
            'carrera' => 'PED',
            'descripcion' => 'Pedagogia',
        ]);

        DB::table('Carrera')->insert([
            'carrera' => 'DER',
            'descripcion' => 'Derecho',
        ]);

        DB::table('Carrera')->insert([
            'carrera' => 'CON',
            'descripcion' => 'Contabilidad',
        ]);
    }
}
