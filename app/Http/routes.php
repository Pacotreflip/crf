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
Route::get('/', 'HomeController@home');
// Rutas de Usuario
Route::get('usuario', 'UsuarioController@index')->name('usuario.index');
// Rutas de Academia
Route::get('academia', 'academiaController@index')->name('academia.index');
// Rutas de Administrador
Route::get('admin', 'adminController@index')->name('admin.index');
// Auth
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Facebook Auth
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
