<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/client/dashboard', function () {
    return view('client.dashboard');
})->middleware('auth')->name('client.dashboard');




Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('tours', TourController::class);
});


