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
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', function () {
        return redirect()->route('clients');
    });
    Route::get('/clients', 'ClientController@index')->name('clients');
    Route::get('/client', 'ClientController@createGet')->name('clientCreateGet');
    Route::post('/client', 'ClientController@createPost')->name('clientCreatePost');

});