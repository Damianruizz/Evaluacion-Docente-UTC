<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 1,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 2,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 3,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 4,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 5,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'Turno_id' => 1,
            'Carrera_id'  => 6,
            'Cutrimestre_id'   => 1,
            'grupo'   => "A",
        ]);
    }
}
