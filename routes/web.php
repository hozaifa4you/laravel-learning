<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('pages.home');
})->name('home');

Route::prefix('posts')->group(function () {
  Route::controller(PostsController::class)->group(function () {
    Route::get('/', 'all_posts')
      ->name('posts');
    Route::get('/{post_id?}', 'single_post')
      ->whereAlphaNumeric('post_id')
      ->name("post.single");
  });
});

Route::get('/about', [AboutController::class, 'about'])
  ->name('about');
Route::get('/contact', [ContactController::class, 'contact'])
  ->name('contact');

// TODO: Users Routes
Route::prefix('/users')->group(function () {
  Route::get('/', [UsersController::class, 'users'])
    ->name('users.all');

  Route::get('/create', [UsersController::class, 'new_user'])
    ->name('user.new.get');
  Route::post('/create', [UsersController::class, 'create_new_user'])
    ->name('user.new.post');

  Route::get('/update/{user_id}', [UsersController::class, 'update_user'])
    ->whereAlphaNumeric('user_id')
    ->name('user.update');
  Route::post('/update/{user_id}', [UsersController::class, 'update_user_post'])
    ->whereAlphaNumeric('user_id')
    ->name('user.update.post');

  Route::get('/delete/{user_id}', [UsersController::class, 'delete_user'])
    ->whereAlphaNumeric('user_id')
    ->name('user.delete');
});
Route::get('/user/{user_id}', [UsersController::class, 'user'])
  ->whereAlphaNumeric('user_id')
  ->name('user.single');


// TODO: special routes
Route::redirect("/say-hi", '/', 301);
Route::fallback(function () {
  return view('not-found');
});

// TODO: test for route
Route::get('/test-drive', [UsersController::class, 'users']);
