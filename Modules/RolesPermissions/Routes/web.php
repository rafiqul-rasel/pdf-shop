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

use Modules\RolesPermissions\Http\Controllers\RolesPermissionsController;

Route::group(['prefix'=>'rolespermissions/','as'=>'rolespermissions.','middleware' => 'auth'], function() {
    Route::get('roles/', 'RolesPermissionsController@index')->name('roles');
    Route::post('roles/store', 'RolesPermissionsController@store')->name('roles.store');
    Route::get('roles/edit/{id}', 'RolesPermissionsController@edit')->name('roles.edit');
    Route::delete('roles/delete/{id}', 'RolesPermissionsController@destroy')->name('roles.delete');
});
