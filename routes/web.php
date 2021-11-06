<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/mostrarUsuarios/{acepto}', 'usuariosController@mostrarUsuarios')->name('mostrarUsuarios');
Route::get('/obtenerUsuariosFecha/{fecha1}/{fecha2}/{letra}', 'usuariosController@obtenerUsuariosFecha')->name('obtenerUsuariosFecha');
Route::get('/usuariosMayorPuntaje/{disfraz}', 'usuariosController@usuariosMayorPuntaje')->name('usuariosMayorPuntaje');
Route::get('/PromedioTiempo/{id}', 'usuariosController@PromedioTiempo')->name('PromedioTiempo');
