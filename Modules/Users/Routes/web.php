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

Route::prefix('users')->group(function() {
    Route::get('/', 'UsersController@index')->name('users');
    Route::get('/create', 'UsersController@create')->name('users.create');
    Route::post('/create', 'UsersController@store')->name('users.store');
    Route::get('/show/{id}', 'UsersController@show')->name('users.show');
    Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::put('/update/{id}', 'UsersController@update')->name('users.update');
    Route::get('/delete/{id}', 'UsersController@destroy')->name('users.delete');
    Route::get('list', 'UsersController@getUsers')->name('users.list');
});
