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

Route::prefix('author')->group(function() {
    Route::get('/', 'AuthorController@index')->name("author");
    Route::get('/authorList', 'AuthorController@getAuthor')->name("author.list");
    Route::get('/create', 'AuthorController@create')->name('author.create');
   Route::post('/store', 'AuthorController@store')->name('author.store');
    Route::get('/edit/{id}', 'AuthorController@edit')->name('author.edit');
   Route::get('/show/{id}', 'AuthorController@show')->name('author.show');
    Route::put('/update/{id}', 'AuthorController@update')->name('author.update');
    Route::get('/delete/{id}', 'AuthorController@destroy')->name('author.delete');
});
