<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("semanales", "SemanalesController", ["except" => ["create", "edit", "show"]]);
Route::resource("frutal", "FrutalesController", ["except" => ["create", "edit", "show"]]);
Route::resource("tipos", "TiposController", ["except" => ["create", "edit", "show"]]);
Route::resource("eventosextremos", "EventosExtremosController", ["except" => ["create", "edit", "show"]]);
Route::resource("cultivos", "CultivosController", ["except" => ["create", "edit", "show"]]);
Route::resource("coniferas", "ConiferasController", ["except" => ["create", "edit", "show"]]);
Route::resource("hojasanchas", "HojasAnchasController", ["except" => ["create", "edit", "show"]]);
Route::resource("estados", "EstadosController", ["except" => ["create", "edit", "show"]]);

/*Route::group(['middleware' => ['usuario']], function () {
    Route::resource("frutal", "FrutalesController", ["only" => ["update", "destroy"]]);
});
*/
