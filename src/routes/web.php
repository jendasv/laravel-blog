<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Homepage redirect
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/'.app()->getLocale());
});

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');


Route::prefix('admin')
    ->middleware(['web', 'admin.access']) // auth zapnutý
    ->group(function () {
        require __DIR__.'/admin.php';
    });

/*
|--------------------------------------------------------------------------
| Front routes (localized)
|--------------------------------------------------------------------------
*/

Route::prefix('{locale}')
    ->middleware(['web']) // tady pozor!
    ->where(['locale' => 'cs|en|de'])
    ->group(function () {
        require __DIR__.'/front.php';
    });

/*
|--------------------------------------------------------------------------
| Breeze profile routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth routes (login, register, etc.)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';

