<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(profesor_grupoTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(CarreraTableSeeder::class);
        $this->call(CuatrimestreTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(ProfesorTableSeeder::class);
        $this->call(TurnoTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
