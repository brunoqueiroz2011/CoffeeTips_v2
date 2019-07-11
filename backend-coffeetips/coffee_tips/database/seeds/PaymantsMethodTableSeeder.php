<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymantsMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments__methods')->insert([ 'store_id' => 1, 'card_banner_id' => 5]);
        DB::table('payments__methods')->insert([ 'store_id' => 1, 'card_banner_id' => 7]);
        DB::table('payments__methods')->insert([ 'store_id' => 1, 'card_banner_id' => 12]);
    }
}
