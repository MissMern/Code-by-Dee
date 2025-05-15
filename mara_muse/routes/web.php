<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('pages.contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('store');




Route::group(["middleware"=>["auth"]],function(){
    //category routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//  //posts routes
    Route::get('/posts/search', [PostsController::class, 'search']);
    Route::get('/categories/search', [CategoryController::class, 'search']);
    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.view');
    Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


// Route::get('/profile', [UserController::class, 'index'])->middleware('auth');


// route group middleware with auth

//route to get the about page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/gamedrive', function () {
    return view('bookings.gamedrive');
})->name('gamedrive');
Route::get('/vacations', function () {
    return view('bookings.vacays');
})->name('vacations');
//gallery route
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
