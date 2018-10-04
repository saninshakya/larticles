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


//List articles
Route::get('articles', 'ArticleController@index');

//List Single Article
Route::get('articles/{id}', 'ArticleController@show');

//Create new article
Route::post('article', 'ArticleController@store');

//Update article
Route::put('article', 'ArticleController@store');

//Delete article
Route::delete('article', 'ArticleController@destroy');