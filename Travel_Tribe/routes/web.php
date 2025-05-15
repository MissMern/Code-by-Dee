<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [UserController::class, 'index'])
    ->middleware('auth')
    ->name('user.dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/tours', [ToursController::class, 'index'])->name('tours.index');
    Route::get('/tours/create', [ToursController::class, 'create'])->name('tours.create');
    Route::post('/tours', [ToursController::class, 'store'])->name('tours.store');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
