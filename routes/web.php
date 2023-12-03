<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('main');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/posts/{post_id?}/comments/{comment_id?}', function (string $post_id = null, string $comment_id = null) {
    return view('single-post', [$post_id, $comment_id]);
});

Route::get('/users/{user_id}/{comment_id?}', function (string $user_id, string $comment_id = null) {
    return "user is = " . $user_id . " User comment id = " . $comment_id;
});