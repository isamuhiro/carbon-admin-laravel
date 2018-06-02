<?php

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::resource('user', 'Users\UserController');
    Route::resource('users', 'Users\UsersController');
});

Auth::routes();