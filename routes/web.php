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

use App\Http\Controllers\PostsController;

Route::get('/', 'PostsController@index');

Route::get('/crear', function(){
    return(view('agregar'));
});

Route::post('procesarEntrada', 'PostsController@agregar');

Route::get('Post/{id}', 'PostsController@post');

Route::post('procesarComentario', 'CommentController@crear');

Route::get('SobreMi', 'PostsController@SobreMi');

Route::get('/categoria/{id}', 'PostsController@categoria');

Route::get('/editar/{id}', 'PostsController@mostrarEditor');

Route::post('procesarEdicion', 'CommentController@editar');

Route::post('/eliminarComentario/{id}', "CommentController@eliminar");

Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
