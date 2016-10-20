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
        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '1',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '2',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '3',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '4',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '5',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '6',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '7',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '8',
        ]);

        DB::table('cuatrimestre')->insert([
            'cuatrimestre' => '9',
        ]);
    }
}
