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
//REVISAR LAAS QUE QUEDAN SEGUN LO REQUERIDO Y LUEGO SEPARALAS POR LOS DISINTOS USUARIOSS RUT

Route::get('/article', 'ArticleController@index');
Route::get('/article/add', 'ArticleController@create');
Route::post('/article', 'ArticleController@store');
Route::get('/article/{id}', 'ArticleController@show');
Route::get('/article/{id}/edit', 'ArticleController@edit');
Route::patch('/article/{id}', 'ArticleController@update');
Route::delete('/article/{id}', 'ArticlesController@destroy');



Route::get('/comment', 'CommentController@index');
Route::get('/comment/add', 'CommentController@create');
Route::post('/comment', 'CommentController@store');
Route::get('/comment/{id}', 'CommentController@show');
Route::get('/commnet/{id}/edit', 'CommentController@edit');
Route::patch('/comment/{id}', 'CommentController@update');
Route::delete('/comment/{id}', 'CommentController@destroy');

Route::get('/visit', 'VisitController@index');
Route::get('/visit/add', 'VisitController@create');
Route::post('/visit', 'VisitController@store');
Route::get('/visit/{id}', 'VisitController@show');
Route::get('/visit/{id}/edit', 'VisitController@edit');
Route::patch('/visit/{id}', 'VisitController@update');
Route::delete('/visit/{id}', 'VisitController@destroy');

Route::get('/favorite', 'FavoriteController@index');
Route::get('/favorite/add', 'FavoriteController@create');
Route::post('/favorite', 'FavoriteController@store');
Route::get('/favorite/{id}', 'FavoriteController@show');
Route::get('/favorite/{id}/edit', 'FavoriteController@edit');
Route::patch('/favorite/{id}', 'FavoriteController@update');
Route::delete('/favorite/{id}', 'FavoriteController@destroy');

Route::get('/photo', 'PhotoController@index');
Route::get('/photo/add', 'PhotoController@create');
Route::post('/photo', 'PhotoController@store');
Route::get('/photo/{id}', 'PhotoController@show');
Route::get('/photo/{id}/edit', 'PhotoController@edit');
Route::patch('/photo/{id}', 'PhotoController@update');
Route::delete('/photo/{id}', 'PhotoController@destroy');

Route::get('/usertype', 'UsertypeController@index');
Route::get('/usertype/add', 'UserTypeController@create');
Route::post('/usertype', 'UserTypeController@store');
Route::get('/usertype/{id}', 'UserTypeController@show');
Route::get('/usertype/{id}/edit', 'UserTypeController@edit');
Route::patch('/usertype/{id}', 'UserTypeController@update');
Route::delete('/usertype/{id}', 'UserTypeController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
