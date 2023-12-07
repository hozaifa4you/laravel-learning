<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('pages.home');
})->name('home');

Route::prefix('posts')->group(function () {
  Route::controller(PostsController::class)->group(function () {
    Route::get('/', 'all_posts')->name('posts');
    Route::get('/{post_id?}', 'single_post')
      ->whereAlphaNumeric('post_id')
      ->name("post");
    Route::get('/create', 'create_post')->name('create');
  });
});

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// TODO: Users Routes
Route::prefix('/users')->group(function () {
  Route::get('/', [UsersController::class, 'users'])->name('users.all');
});
Route::get('/user', [UserController::class, 'user'])->name('user');


// TODO: special routes
Route::redirect("/say-hi", '/', 301);
Route::fallback(function () {
  return view('not-found');
});
