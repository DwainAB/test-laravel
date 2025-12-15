<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;



Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/article/{id?}', [IndexController::class, 'show'])->name('article.details');

