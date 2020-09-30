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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'HomeController@registro')->name('registro');

Route::resource('precios', 'PrecioController');

Route::resource('clientes', 'ClienteController');

Route::get('productos/obtenerpreciocompra', 'ProductoController@obtenerpreciocompra')->name('productos.obtenerpreciocompra');
Route::resource('productos', 'ProductoController');

Route::get('precioproductos/showprecioproducto/{id}', 'PrecioproductoController@showprecioproducto')->name('precioproductos.showprecioproducto');
Route::resource('precioproductos', 'PrecioproductoController');


