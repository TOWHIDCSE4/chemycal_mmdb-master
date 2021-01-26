<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'Auth'], function () {

});
Route::group(['namespace' => 'Api'], function () {
    Route::post('/upload', ['uses' => 'PhotoController@uploadPhoto']);
});
Route::group(['namespace' => 'Admin'], function () {
    Route::group(['middleware' => ['authApi']], function() {
        Route::get('/name', 'AdminController@getName');
    });
});