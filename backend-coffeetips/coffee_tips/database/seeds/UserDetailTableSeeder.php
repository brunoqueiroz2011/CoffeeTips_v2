<?php

use Illuminate\Database\Seeder;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->insert([
            'user_id' => 1,
            'cpf' => "12345678901",
            'cep' => "54325670",
            'birth_date' => "2019-11-23",
        ]);
    }
}
