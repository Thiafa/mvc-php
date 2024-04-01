<?php

require 'src/Routes/Route.php';
/*
* Method($page, $controller, $method)
*/
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/about', [UserController::class, 'index'])->name('about.index');
