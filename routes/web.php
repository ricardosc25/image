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


// Route::get('/portada',[
// 	'uses' => 'PortadaController@index',
// 	'as'   => 'portada'
// ]);

Route::get('/portada', 'ImageprocessController@upload');
Route::post('/portada', 'ImageprocessController@postupload');
Route::post('/cover-image-save', 'ImageprocessController@postimgAdjustpostion');

Route::get('images','PruebaController@index');
Route::post('uploadImage','PruebaController@uploadImage');