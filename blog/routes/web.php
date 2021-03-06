<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::get('/', IndexController::class);
Route::get('/category/{slug}', CategoryController::class);
Route::get('/tag/{slug}', TagController::class);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/search', [PostController::class, 'search']);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
