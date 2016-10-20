<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Patricia Bravo',
            'email'  => 'patricia.bravo@utc.mx',
            'password'   => Hash::make('admin'),
            'user'      => 'Admin',
        ]);
    }
}
