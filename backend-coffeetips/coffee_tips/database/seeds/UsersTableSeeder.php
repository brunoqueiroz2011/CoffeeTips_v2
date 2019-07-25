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
            'email' => 'dev@gmail.com',
            'password' => bcrypt('1234567890'),
            'user_type_id' => 1
        ]);
    }
}
