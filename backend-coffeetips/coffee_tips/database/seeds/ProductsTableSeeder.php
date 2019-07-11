<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'store_id'=>'1',
            'category_id' => '2',
            'name' => 'Cappuccino Italiano',
            'description' => 'café, canela e leite',
            'price' => 12.50
        ]);

        DB::table('products')->insert([
            'store_id'=>'1',
            'category_id' => '4',
            'name' => 'Afogato',
            'description' => 'Pão caseiro de batata doce, com carne de sol desfiada e creme de queijo',
            'price' => 8.90
        ]);
    }
}
