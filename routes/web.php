<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('articles', ArticleController::class);
Route::resource('comments', CommentController::class);


Route::get('/home', [App\Http\Controllers\ArticleController::class, 'index'])->name('home');

Route::post('articles/{article}/comments', [CommentController::class, 'store'])->name('articles.comments.store');
Route::delete('articles/{article}/comments/{comment}', [CommentController::class, 'destroy'])->name('articles.comments.destroy');