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

// Rutas de Páginas
Route::get('/', 'HomeController@home')->name('home');

// Rutas de Usuario
Route::get('usuario/login', 'UsuarioController@getLogin');
Route::post('usuario/login', 'UsuarioController@postLogin');
Route::get('usuario/logout', 'UsuarioController@getLogout');
Route::get('usuario/registro', 'UsuarioController@getRegistro');
Route::get('usuario/index', 'UsuarioController@index')->name('usuario.index');

// Rutas de Administrador
Route::get('admin/login', 'AdminController@getLogin');
Route::post('admin/login', 'AdminController@postLogin');
Route::get('admin/logout', 'AdminController@getLogout');
Route::get('academia/registro', 'AdminController@getRegistro');
Route::get('admin/index', 'adminController@index');

// Rutas de Invitado
Route::get('invitado/index', 'invitadoController@index');

// Auth
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Facebook Auth
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
