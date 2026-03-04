<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/admin/login');
})->name('admin.logout');

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/posts', [\App\Http\Controllers\Admin\PostController::class, 'index'])
    ->name('admin.posts.index');


Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])
    ->name('admin.users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');


//Route::get('/login', function () {
//    return view('admin.auth.login');
//})->name('admin.login');
