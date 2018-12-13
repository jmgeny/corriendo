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


Auth::routes();

Route::get('/evento','InicioController@inicio');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/evento/atletas','InicioController@atleta');

Route::get('evento/buscardni/{id}', 'InicioController@buscardni');
Route::get('evento/cargadatos', 'InicioController@cargadatos');


// Route::get('/event/inscriptos/{id}','InicioController@inscriptos');

Route::resource('athlete', 'AthleteController');
Route::resource('event','EventController');

Route::resource('inscripcion','InscripcionController');