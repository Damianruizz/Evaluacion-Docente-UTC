<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 1,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 2,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 3,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 4,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 5,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);

        DB::table('grupo')->insert([
            'idTurno' => 1,
            'idCarrera'  => 6,
            'idCutrimestre'   => 1,
            'grupo'   => "A",
        ]);
    }
}
