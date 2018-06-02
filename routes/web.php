<?php

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::resource('user', 'Users\UserController');
    Route::resource('users', 'Users\UsersController');
    Route::resource('todos', 'TodoController');
});

Route::get('teste',function(){
    return view('teste');
});

Auth::routes();