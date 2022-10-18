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

Route::prefix('orders')->group(function() {
    Route::get('/', 'OrdersController@index')->name('orders');
    Route::get('/getorders', 'OrdersController@getAllOrders')->name('order.list');
    Route::get('details/{id}', 'OrdersController@edit')->name('order.edit');
    Route::get('status_update/{orderId}/{statusId}', 'OrdersController@status_update');
    Route::post('/place', 'OrdersController@store')->name('placeorder');
});
