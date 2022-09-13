<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Comment\CommentController;

// using route controller group
Route::controller(ArticleController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/articles', 'index');
    Route::get('/articles/detail/{id}', 'detail');
    Route::get('/articles/add', 'add');
    Route::post('/articles/add', 'create');
    Route::get('/articles/delete/{id}', 'delete');
});

Route::controller(CommentController::class)->group(function() {
    Route::post('/comments/add', 'create');
    Route::get('/comments/delete/{id}', 'delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
