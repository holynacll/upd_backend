<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teste', function () {
    return ['status' => 'ok'];
});

Route::apiResource('clientes', ClienteController::class);

Route::get('estados', function () {
    return \App\Models\UnidadeFederativa::all();
});

Route::get('cidades/{id}', function ($id) {
    return \App\Models\Municipio::where('uf_id', $id)->get();
});