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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', ['uses' => 'NavController@login', 'as' => 'login']);
    Route::get('/dashboard', ['uses' => 'NavController@dashboard', 'as' => 'dashboard']);
    Route::get('/logout', ['uses' => 'UserController@logout', 'as' => 'logout']);
});


