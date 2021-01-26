<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Auth'], function () {
    Route::view('/login', 'admin.author.login');
    Route::view('/forgot-password', 'admin.author.forgot-password');
    Route::post('/login', ['uses' => 'AuthAdminController@loginAdmin']);
    Route::get('/logout', ['uses' => 'AuthAdminController@logout']);





    Route::group(['middleware' => ['admin']], function() {
        Route::view('/home', 'admin.dashboard.index');
        Route::view('/user', 'admin.users.index');
        Route::view('/user/create', 'admin.users.create');
        Route::view('/400', 'admin.error.400');
        Route::view('/401', 'admin.error.401');
        Route::view('/403', 'admin.error.403');
        Route::view('/404', 'admin.error.404');
        Route::view('/500', 'admin.error.500');
        Route::view('/503', 'admin.error.503');
    });
});

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::resource('users','AdminController');
        Route::view('/create', 'admin.users.create');
        Route::view('/create', 'admin.users.create');
        Route::get('/user/all', 'AdminController@UserAll');
        Route::get('/user/detail', 'AdminController@UserDetail');
        Route::get('/user/edit/{id}', 'AdminController@editUserId');
        Route::post('/user/update', 'AdminController@UserUpdate');
        Route::post('/user/create', 'AdminController@UserCreate');
        Route::post('/user/delete', 'AdminController@UserDelete');
        Route::get('/user/search', 'AdminController@UserSearch');

    });

});

