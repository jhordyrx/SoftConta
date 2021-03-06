<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('buscar/proveedor/{b}','ProveedorController@Buscar');
Route::get('/', 'HomeController@index');
Route::get('listventa/', 'VentaController@ventas');

Route::get('tipotabla/{id}','TipoTablaController@TipoTabla');

Route::group(['middleware' => 'web'], function() {
    Route::auth();
    Route::resource('Compra','CompraController');
    Route::resource('Venta','VentaController');
    Route::resource('Admin','AdminController');

});