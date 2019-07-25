<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTypeTableSeeder::class,
            UsersTableSeeder::class,
            UserDetailTableSeeder::class,
            StoresTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            EventTableSeeder::class,
            CardBannerTableSeeder::class,
            PaymantsMethodTableSeeder::class,
        ]);
    }
}
