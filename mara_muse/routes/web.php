<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('pages.contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

//route to get the about page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/addCategory', function () {
    return view('category.addCategory');
})->name('addCategory');
//LIST CATEGORIES
Route::get('/categories', function () {
    return view('category.listCategories');
})->name('categories');

Route::get('/posts', function () {
    return view('posts.listPost');
})->name('posts');
Route::get('/addPosts', function () {
    return view('posts.addPost');
})->name('addPost');
