<?php

use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(['name' => 'Root']);
        DB::table('user_types')->insert(['name' => 'Administrador']);
        DB::table('user_types')->insert(['name' => 'Funcionario']);
        DB::table('user_types')->insert(['name' => 'Consumidor']);
    }
}
