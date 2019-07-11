<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name'=> 'Café do Brejo',
            'email' => 'cafebrejo@gmail.com',
            'password' => bcrypt('1234567890'),
            'description' => 'Viemos do sertão (Triunfo) somos a primeira cafeteria com torrefação própria do estado, trabalhando com vários métodos de filtrados e com melhores grãos do Brasil.',
            'neighborhood' => 'Santo Amaro',
            'number' => '20',
            'city' => 'Recife',
            'state' => 'Pernambuco',
            'cep' => '50040-080',
            'country' => 'Brasil',
            'street' => 'Rua Capitão Lima',
            'schedule' => 'Seg - Sex 07h às 21h e Sáb 07h às 14h',
            'DDD1' => '81',
            'telephone' => '3423-6964',
            'DDD2' => '81',
            'cellphone' => '9888-8888',
            'instagram' => '@cafedobrejorecife',
            'facebook' => '/cafedobrejorecife',
            'logo' => '',
            'firdt_img_local' => '',
            'second_img_local' => '',
            'third_img_local' => '',
        ]);
    }
}
