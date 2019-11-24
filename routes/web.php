<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Template.template');
});
Route::get('/coniferas', function () {
    return view('Coniferas.index');
});
Route::get('/template', function () {
    return view('Template.template');
});
Route::get('/formulario', function () {
    return view('Formulario.formulario');
});
Route::get('/resultados', function () {
    return view('Resultados.resultados');
});
Route::get('/administradores', function () {
    return view('Administradores.index');
});
Route::get('/frutales', function () {
    return view('Frutales.index');
});
Route::get('/tipos', function () {
    return view('Tipos.index');
});
Route::get('/eventosextremos', function () {
    return view('EventosExtremos.index');
});
Route::get('/cultivos', function () {
    return view('Cultivos.index');
});
Route::get('/hojasanchas', function () {
    return view('HojasAnchas.index');
});
Route::get('/estados', function () {
    return view('Estados.index');
});
