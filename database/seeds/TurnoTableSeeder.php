<?php

use Illuminate\Database\Seeder;

class TurnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Turno')->insert([
            'turno' => 'Matutino',
        ]);

        DB::table('Turno')->insert([
            'turno' => 'Vespertino',
        ]);
    }
}
