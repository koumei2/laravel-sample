<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

/*
Route::get('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('reset-password/{token}', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'create'])
        ->name('password.reset');
Route::post('reset-password', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'store'])
        ->name('password.store');
*/

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })
        ->name('index');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [App\Http\Controllers\Admin\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('password', [App\Http\Controllers\Auth\PasswordController::class, 'update'])->name('password.update');

    Route::get('user', [App\Http\Controllers\Admin\User\ListController::class, 'index'])->name('user.index');
    Route::get('user/register', [App\Http\Controllers\Admin\User\RegisterController::class, 'create'])
        ->name('user.register');
    Route::post('user/register', [App\Http\Controllers\Admin\User\RegisterController::class, 'store']);

});
