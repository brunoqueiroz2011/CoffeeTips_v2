<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'store_id' => '1',
            'name' => 'Harmonização de Café com Chocolate',
            'date' => '2019-07-29',
            'hour' => '14:00:00',
            'local' => 'Rua das Flores',
            'qtd_people' => '50',
            'description' => 'Venha aprender a combinar os diversos tipos de chocolates com os diversos tipos de café.',
            'price' => '20.00',
        ]);
    }
}
