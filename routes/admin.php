<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
          //route admin products ---------------------///----------------Route----------------------//
          Route::get('/categories', 'Admin\AdminCategoryController@index')->name('admin.categories.index');

        /*//---------------------------------------------------Route premiums comments--------------------------------------//
        Route::get('/premiums/comments', 'Admin\AdminPremiumsCommentairesController@index')->name('admin.comments.index');
        Route::patch('/premiums/comments/{comment}', 'Admin\AdminPremiumsCommentairesController@update')->name('admin.comments.update');
        Route::delete('/premiums/comments/{comment}', 'Admin\AdminPremiumsCommentairesController@destroy')->name('admin.comments.destroy'); */



        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

    });

});