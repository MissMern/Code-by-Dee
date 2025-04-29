<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('pages.contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('store');

//category routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
 //posts routes
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [App\Http\Controllers\PostsController::class, 'show'])->name('posts.view');
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [App\Http\Controllers\PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.destroy');


//route to get the about page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
//gallery route
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
