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
        DB::table('turno')->insert([
            'turno' => 'Matutino',
        ]);

        DB::table('turno')->insert([
            'turno' => 'Vespertino',
        ]);
    }
}
