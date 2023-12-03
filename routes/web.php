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

Route::get('/posts/{post_id}/comments/{comment_id}', function (string $post_id = null, string $comment_id = null) {
    return 'Post Id = ' . $post_id . " comment id = " . $comment_id;
})->whereNumber('post_id')->whereAlpha('comment_id');