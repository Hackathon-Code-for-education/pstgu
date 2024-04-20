<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MainRouteController;
use App\Http\Middleware\AuthUserMiddleware;
use Illuminate\Support\Facades\Route;

//
// MAIN
//

Route::prefix('/')->group(function () {
    Route::get('', [MainRouteController::class, 'index'])->name('main');
});

//
// AUTH
//

Route::get('signin', [LoginController::class, 'index'])->name('main');
Route::post('signin', [LoginController::class, 'store'])->name('main');

Route::get('signup', [RegisterController::class, 'index'])->name('main');
Route::post('signup', [RegisterController::class, 'store'])->name('main');

//
// ACCOUNT
//

Route::prefix('user')->middleware([AuthUserMiddleware::class])->group(function () {
    Route::get('', [MainRouteController::class, 'index'])->name('main');
});
