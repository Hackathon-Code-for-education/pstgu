<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifiedController;
use App\Http\Controllers\ExitUserController;
use App\Http\Controllers\MainRouteController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UnivertisiesController;
use App\Http\Controllers\UserRouteController;
use App\Http\Middleware\AuthUserMiddleware;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Route;

//
// MAIN
//

Route::prefix('/')->group(function () {
    Route::get('', [MainRouteController::class, 'index'])->name('main');
    Route::get('about', [MainRouteController::class, 'about'])->name('main.about');
    Route::get('faq', [MainRouteController::class, 'faq'])->name('main.faq');
});

//
// AUTH
//

Route::get('verified', [VerifiedController::class, 'index'])->name('verified');

Route::get('exit', [ExitUserController::class, 'index'])->name('exit');

Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('signin', [LoginController::class, 'index'])->name('signin');
    Route::post('signin', [LoginController::class, 'store'])->name('signin.store');

    Route::get('signup', [RegisterController::class, 'index'])->name('signup');
    Route::post('signup', [RegisterController::class, 'store'])->name('signup.store');
});

//
// ACCOUNT
//

Route::prefix('user')->middleware([AuthUserMiddleware::class])->group(function () {
    Route::get('', [UserRouteController::class, 'index'])->name('user');
    Route::get('settings', [SettingsController::class, 'index'])->name('user.settings');
    Route::get('universities', [UnivertisiesController::class, 'index'])->name('user.universities');
    Route::get('uni/{name}', [UnivertisiesController::class, 'show'])->name('user.uni');
});
