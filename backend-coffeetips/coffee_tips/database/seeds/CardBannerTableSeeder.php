<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardBannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards_banners')->insert(['name'=>'MasterCard']);
        DB::table('cards_banners')->insert(['name'=>'Visa']);
        DB::table('cards_banners')->insert(['name'=>'Maestro']);
        DB::table('cards_banners')->insert(['name'=>'Elo']);
        DB::table('cards_banners')->insert(['name'=>'Hipercard']);
        DB::table('cards_banners')->insert(['name'=>'American Expresso']);
        DB::table('cards_banners')->insert(['name'=>'VR Refeição']);
        DB::table('cards_banners')->insert(['name'=>'VR Alimentação']);
        DB::table('cards_banners')->insert(['name'=>'Alelo Refeição']);
        DB::table('cards_banners')->insert(['name'=>'Alelo Alimentação']);
        DB::table('cards_banners')->insert(['name'=>'Ticket Refeição']);
        DB::table('cards_banners')->insert(['name'=>'Sodexo']);
        DB::table('cards_banners')->insert(['name'=>'PicPay']);
    }
}
