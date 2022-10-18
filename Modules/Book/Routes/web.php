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

Route::prefix('book')->group(function() {
    Route::get('/', 'BookController@index')->name('books');
    Route::get('/getBooks', 'BookController@getAllBooks')->name('books.list');
    Route::get('/create', 'BookController@create')->name('books.create');
    Route::post('/store', 'BookController@store')->name('books.store');
    Route::post('/imageUpload', 'BookController@imageUpload')->name('books.image.upload');
//    Route::get('/edit/{id}', 'BookController@edit')->name('books.edit');
    Route::get('/show/{id}', 'BookController@show')->name('books.show');
//    Route::put('/update/{id}', 'BookController@update')->name('books.update');
//    Route::get('/delete/{id}', 'BookController@destroy')->name('books.delete');
});
