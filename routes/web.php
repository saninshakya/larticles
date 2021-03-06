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

// Route::get('test', 'ArticleController@index');
Route::resource('articles', 'ArticleController');
//List articles
// Route::get('articles', 'ArticleController@index');

// //List Single Article
// Route::get('article/{id}', 'ArticleController@show');
// Route::get('article/create', 'ArticleController@create');

// //Create new article
// Route::post('article', 'ArticleController@store');

// //Update article
// Route::put('article', 'ArticleController@store');

// //Delete article
// Route::delete('/article/{id}', 'ArticleController@destroy');