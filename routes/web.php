<?php

use Core\Router\Web\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/create_user', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('/store_user', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/edit_user/{id}', [\App\Http\Controllers\UserController::class, 'edit']);
Route::put('/update_user/{id}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('/destroy_user/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);


Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/create_category', [\App\Http\Controllers\CategoryController::class, 'create']);
Route::get('/edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'edit']);
