<?php

use Illuminate\Database\Seeder;

class CuatrimestreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '1',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '2',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '3',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '4',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '5',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '6',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '7',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '8',
        ]);

        DB::table('Cutrimestre')->insert([
            'cuatrimestre' => '9',
        ]);
    }
}
