<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name'=>'Cafés Gelados']);
        DB::table('categories')->insert(['name'=>'Cafés Quentes']);
        DB::table('categories')->insert(['name'=>'Chás']);
        DB::table('categories')->insert(['name'=>'Creeps']);
        DB::table('categories')->insert(['name'=>'Tapiocas']);
    }
}
