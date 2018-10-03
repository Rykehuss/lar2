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

Route::group(['middleware' => ['auth']], function () {
//	Route::get('/book', 'BookController@index')->name('book.index');
	Route::resource('book', 'BookController');
	Route::resource('size', 'SizeController');
	Route::resource('genre', 'GenreController');
});

Route::get('/genre/{genre}', function (\App\Genre $genre) {
    var_dump($genre->books);
});

//Route::resource('book', 'BookController');
