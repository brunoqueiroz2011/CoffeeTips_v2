<?php

use Illuminate\Http\Request;
use App\Store;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::get('/stores', 'StoreController@index'); // return all stores
    Route::post('/stores', 'StoreController@store'); //Make the store insert into the table
    return $request->user();
});

Route::middleware('auth:api')->get('/store', function(Request $request){
    //Route::post('/stores', 'StoreController@store'); //Make the store insert into the table
});

Route::get('/stores', 'StoreController@index'); // return all stores
Route::get('/stores/{id}', 'StoreController@show');// return to specific store by id
//Route::post('/stores', 'StoreController@store'); //Make the store insert into the table
Route::get('/stores/update/{id}', 'StoreController@update'); //Make the store update into the table
Route::get('/stores/disable/{id}', 'StoreController@disable'); //Make the store deactivation into the table
Route::get('/stores/delete/{id}', 'StoreController@destroy'); //Make the store destroy into the table






