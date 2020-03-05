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
    return view('welcome');
});
Route::resource('/articulo', 'ArcticuloController' );
Route::resource('/tunel', 'TunelController' );
Route::resource('/tipo', 'TipoCotroller' );
Route::resource('/categoria', 'CategoriaController' );
Route::resource('/tiempo', 'TiempoController' );
Route::resource('/cliente', 'ClienteController' );
Route::resource('/tipo_cliente', 'TipoClienteController' );
Route::resource('/seguimiento', 'SeguimientoController' );
Route::resource('/localentrega', 'LocalEntregaController' );
//Route::get('/tiempo/{tiempo}/eventos/create', 'EventoController@create');
//Route::post('/tiempo/{tiempo}/eventos', 'EventoController@store');
Route::get('/articulo/{id}/ConfirmaD', 'ArcticuloController@ConfirmaD');
Route::get('/tunel/{id}/ConfirmaD', 'TunelController@ConfirmaD');
Route::get('/tipo/{id}/ConfirmaD', 'CategoriaController@ConfirmaD');
Route::get('/categoria/{id}/ConfirmaD', 'TipoCotroller@ConfirmaD');
Route::get('/tiempo/{id}/ConfirmaD', 'TiempoController@ConfirmaD');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//aqui las rutas de exportar
Route::get('/import-export', 'TiempoController@importExport');
Route::post('/import', 'TiempoController@import');
//Route::get('/export', 'TiempoController@export');
Route::get('/export', 'ReporteCotroller@export');
Route::get('/export2', 'ReporteCotroller@export2');
Route::post('/export', 'ReporteCotroller@Tiempos');

//aqui van los Reportes
Route::get('/reportes', 'ReporteCotroller@index');
Route::get('/reportes/rtiempos', 'ReporteCotroller@rtiempos');
Route::post('/reportes/rtiemposc', 'ReporteCotroller@rtiemposc');
Route::get('/reportes/rseguit', 'ReporteCotroller@rseguit');
Route::post('/reportes/rseguimiento', 'ReporteCotroller@rseguimiento');
