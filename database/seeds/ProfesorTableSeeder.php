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
            'APaterno'  => 'Arellano',
            'AMaterno'   => 'Orozco',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Jaime',
            'APaterno'  => 'Minor',
            'AMaterno'   => 'Gomez',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Angel',
            'APaterno'  => 'Barrientos',
            'AMaterno'   => 'P.',
        ]);

        DB::table('profesor')->insert([
            'Nombre' => 'Miguel Angel',
            'APaterno'  => 'Pi',
            'AMaterno'   => 'P.',
        ]);
    }
}
