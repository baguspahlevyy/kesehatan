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

    Route::post('realtime/isikan', array('before' => 'csrf', 'uses' => 'RealtimeController@isikan')); 
    Route::get('realtime/listtoko/{id}', array('before' => 'csrf', 'uses' => 'RealtimeController@listtoko')); 
    Route::resource('realtime', 'RealtimeController');

});
 