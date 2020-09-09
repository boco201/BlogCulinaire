<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
          //route admin products ---------------------///----------------Route----------------------//
         Route::get('/categories', 'Admin\CategoryController@index')->name('admin.index');
         Route::get('/categories/create', 'Admin\CategoryController@create')->name('admin.create');
         Route::post('/categories', 'Admin\CategoryController@store')->name('admin.store');


        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

    });

});