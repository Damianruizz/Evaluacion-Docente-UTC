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
        DB::table('carrera')->insert([
            'carrera' => 'TUR',
            'descripcion' => 'Turismo',
        ]);

        DB::table('carrera')->insert([
            'carrera' => 'ADMIN',
            'descripcion' => 'Administracion de Empresas',
        ]);

        DB::table('carrera')->insert([
            'carrera' => 'DIS',
            'descripcion' => 'Diseño Grafico',
        ]);

        DB::table('carrera')->insert([
            'carrera' => 'PED',
            'descripcion' => 'Pedagogia',
        ]);

        DB::table('carrera')->insert([
            'carrera' => 'DER',
            'descripcion' => 'Derecho',
        ]);

        DB::table('carrera')->insert([
            'carrera' => 'CON',
            'descripcion' => 'Contabilidad',
        ]);
    }
}
