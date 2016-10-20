<?php

use Illuminate\Database\Seeder;

class profesor_grupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 1,
            'Grupo_id'  => 1,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 1,
            'Grupo_id'  => 2,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 1,
            'Grupo_id'  => 5,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 1,
            'Grupo_id'  => 6,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 2,
            'Grupo_id'  => 1,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 2,
            'Grupo_id'  => 2,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 2,
            'Grupo_id'  => 5,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 2,
            'Grupo_id'  => 6,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 3,
            'Grupo_id'  => 7,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 3,
            'Grupo_id'  => 8,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 3,
            'Grupo_id'  => 9,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 3,
            'Grupo_id'  => 1,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 4,
            'Grupo_id'  => 1,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 4,
            'Grupo_id'  => 4,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 4,
            'Grupo_id'  => 5,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 4,
            'Grupo_id'  => 9,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 5,
            'Grupo_id'  => 6,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 5,
            'Grupo_id'  => 7,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 5,
            'Grupo_id'  => 8,
        ]);

        DB::table('profesor_grupo')->insert([
            'Profesor_id' => 5,
            'Grupo_id'  => 9,
        ]);

    }
}
