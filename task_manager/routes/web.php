<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [TasksController::class, 'create']);
Route::post('/store', [TasksController::class, 'store']);
Route::get('/index', [TasksController::class, 'index']);
Route::post('/index', [TasksController::class, 'index']);
Route::get('/view/{id}', [TasksController::class, 'show']);
Route::get('/edit/{id}', [TasksController::class, 'edit']);
Route::post('/update/{id}', [TasksController::class, 'update']);
Route::delete('/delete/{id}', [TasksController::class, 'destroy']);

// Route::post('/view', [App\Http\Controllers\TasksController::class, 'show']);