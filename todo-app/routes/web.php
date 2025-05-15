<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Show the create form
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Show the edit form (we'll update this later to pass an ID)
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// Store a new todo
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// List all todos
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Update a todo
Route::post('/todos/{id}', [TodoController::class, 'update'])->name('todos.update');
//delete a todo
Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todos.destroy');
// Show a single todo
Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todos.view');
// Show the edit form