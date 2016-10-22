<?php

use Illuminate\Database\Seeder;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor')->insert([
            'Nombre' => 'Ericka',
            'Apellido_Paterno'  => 'Arellano',
            'Apellido_Materno'   => 'Orozco',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Jaime',
            'Apellido_Paterno'  => 'Minor',
            'Apellido_Materno'   => 'Gomez',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Angel',
            'Apellido_Paterno'  => 'Barrientos',
            'Apellido_Materno'   => 'P.',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Miguel Angel',
            'Apellido_Paterno'  => 'Pi',
            'Apellido_Materno'   => 'P.',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Julio Eernesto',
            'Apellido_Paterno'  => 'Ponce',
            'Apellido_Materno'   => 'de Leon',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Abimael',
            'Apellido_Paterno'  => 'Juarez',
            'Apellido_Materno'   => 'Granados',
        ]);
    }
}
