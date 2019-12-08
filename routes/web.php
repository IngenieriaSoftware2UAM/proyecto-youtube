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

Route::get('/home', 'HomeController@index')->name('home');

//Ruta donde se utiliza el controlador de videos
Route::resource('video', 'VideoController');

//Ruta para el Comentario Controlador de recursos.
// Route::resource('comentario', 'ComentarioController');

//Para crear comentario
Route::post('/comentario/{id}', 'ControladorComentario@store');
//Para eliminar cometario
Route::delete('/comentario/{comentario}', 'ControladorComentario@delete');