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


Route::group([ 'middleware' => ['web'], ], function() {

    Route::post('kesehatan/isikan', array('before' => 'csrf', 'uses' => 'KesehatanController@isikan')); 
    Route::post('kesehatan/simpan', array('before' => 'csrf', 'uses' => 'KesehatanController@simpan')); 
    Route::resource('kesehatan', 'KesehatanController');

});
