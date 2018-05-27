<?php

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::resource('user', 'UserController');
});

Auth::routes();