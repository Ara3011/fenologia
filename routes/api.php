<?php

use Illuminate\Http\Request;

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
    return $request->user();
});
Route::resource("frutal", "FrutalesController", ["only" => ["index", "store"]]);
Route::resource("tipos", "TiposController", ["except" => ["create", "edit", "show"]]);
Route::resource("eventosextremos", "EventosExtremosController", ["except" => ["create", "edit", "show"]]);
Route::resource("cultivos", "CultivosController", ["except" => ["create", "edit", "show"]]);
Route::resource("coniferas", "ConiferasController", ["except" => ["create", "edit", "show"]]);
Route::resource("hojasanchas", "HojasAnchasController", ["except" => ["create", "edit", "show"]]);
Route::resource("estados", "EstadosController", ["except" => ["create", "edit", "show"]]);

Route::group(['middleware' => ['usuario']], function () {
    Route::resource("frutal", "FrutalesController", ["only" => ["update", "destroy"]]);
});
