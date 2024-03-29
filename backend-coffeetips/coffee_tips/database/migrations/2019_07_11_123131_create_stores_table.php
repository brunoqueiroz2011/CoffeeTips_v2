<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('description');
            $table->string('neighborhood');
            $table->integer('number');
            $table->string('city');
            $table->string('state');
            $table->string('cep',8);
            $table->string('country');
            $table->string('street');
            $table->string('schedule');
            $table->string('DDD1');
            $table->string('telephone');
            $table->string('DDD2');
            $table->string('cellphone');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('logo');
            $table->string('firdt_img_local');
            $table->string('second_img_local');
            $table->string('third_img_local');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
