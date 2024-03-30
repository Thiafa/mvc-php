<?php

require 'src/Routes/Route.php';
/*
* Method($page, $controller, $method)
*/
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/about', [UserController::class, 'index'])->name('about.index');
