<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
