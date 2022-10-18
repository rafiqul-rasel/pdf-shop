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

Route::prefix('bookcategory')->group(function() {
    Route::get('/', 'BookCategoryController@index')->name('bookcategory');
    Route::get('/getall', 'BookCategoryController@getbookcategory')->name('bookcategory.list');
    Route::get('/create', 'BookCategoryController@create')->name('bookcategory.create');
    Route::post('/store', 'BookCategoryController@store')->name('bookcategory.store');
    Route::get('/edit/{id}', 'BookCategoryController@edit')->name('bookcategory.edit');
    Route::get('/show/{id}', 'BookCategoryController@show')->name('bookcategory.show');
    Route::put('/update/{id}', 'BookCategoryController@update')->name('bookcategory.update');
    Route::get('/delete/{id}', 'BookCategoryController@destroy')->name('bookcategory.delete');
});
