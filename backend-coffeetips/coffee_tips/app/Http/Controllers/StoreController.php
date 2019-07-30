<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class StoreController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::all();
        return view('forms.profile', compact($store));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store();
        $store->name                = $request->input('name');
        $store->email               = $request->input('email');
        $store->password            = bcrypt($request->input('password'));
        $store->description         = $request->input('description');
        $store->neighborhood        = $request->input('neighborhood');
        $store->number              = $request->input('number');
        $store->city                = $request->input('city');
        $store->state               = $request->input('state');
        $store->cep                 = $request->input('cep');
        $store->country             = $request->input('country');
        $store->street              = $request->input('street');
        $store->schedule            = $request->input('schedule');
        $store->DDD1                = $request->input('DDD1');
        $store->telephone           = $request->input('telephone');
        $store->DDD2                = $request->input('DDD2');
        $store->cellphone           = $request->input('cellphone');
        $store->instagram           = $request->input('instagram');
        $store->facebook            = $request->input('facebook');
        $store->logo                = $request->input('logo');
        $store->firdt_img_local     = $request->input('firdt_img_local');
        $store->second_img_local    = $request->input('second_img_local');
        $store->third_img_local     = $request->input('third_img_local');
        $store->save();
        return response()->json([
            'error' => false,
            'message' => 'Cafeteria cadastrada com sucesso!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return $store;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $store = new Store();
        if (isset($store)){
            $store->name                = $request->input('name');
            $store->email               = $request->input('email');
            $store->password            = bcrypt($request->input('password'));
            $store->description         = $request->input('description');
            $store->neighborhood        = $request->input('neighborhood');
            $store->number              = $request->input('number');
            $store->city                = $request->input('city');
            $store->state               = $request->input('state');
            $store->cep                 = $request->input('cep');
            $store->country             = $request->input('country');
            $store->street              = $request->input('street');
            $store->schedule            = $request->input('schedule');
            $store->DDD1                = $request->input('DDD1');
            $store->telephone           = $request->input('telephone');
            $store->DDD2                = $request->input('DDD2');
            $store->cellphone           = $request->input('cellphone');
            $store->instagram           = $request->input('instagram');
            $store->facebook            = $request->input('facebook');
            $store->logo                = $request->input('logo');
            $store->firdt_img_local     = $request->input('firdt_img_local');
            $store->second_img_local    = $request->input('second_img_local');
            $store->third_img_local     = $request->input('third_img_local');
            $store->save();
        }
        return response()->json([
            'error' => false,
            'message' => 'Cafeteria atualizada com sucesso!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        if (isset($store)){
            $store->delete();
        }
        return response()->json([
            'error' => false,
            'message' => 'Cafeteria excluida com sucesso!'
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'result' => 'Deslogado com sucesso!!!'
        ]);
    }

    public function login()
    {

    }
}
