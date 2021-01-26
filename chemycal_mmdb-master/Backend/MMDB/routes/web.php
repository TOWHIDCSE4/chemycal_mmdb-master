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


Route::group(['namespace' => 'Auth'], function () {
    Route::view('/login', 'user.author.login');
    Route::post('/login', ['uses' => 'AuthUserController@loginUser']);
    Route::get('/logout', ['uses' => 'AuthUserController@logout']);
    Route::view('/forgot-password', 'user.author.forgot-password');
    Route::group(['middleware' => ['user']], function () {
        Route::view('/', 'user.home.home');
        Route::view('/extractiontool', 'user.tool.extractiontool.index');
        Route::view('/guide/view', 'user.guide.form');
    });

});

