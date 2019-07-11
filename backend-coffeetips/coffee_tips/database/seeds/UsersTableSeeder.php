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
            'name' => 'Bruno Queiroz',
            'email' => 'brunoqueiroz@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
    }
}
