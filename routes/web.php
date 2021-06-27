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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/busqueda', 'BusquedaController@show');
Route::get('/realizarBusqueda/{filtro}', 'BusquedaController@search');

Route::get('/compras', 'CompraController@showList');
Route::get('/agregarProducto/{id}/{route}', 'CompraController@addProduct');
Route::get('/mostrarProductos', 'CompraController@showProducts');
Route::get('/comprarProductos', 'CompraController@addPurchase');
