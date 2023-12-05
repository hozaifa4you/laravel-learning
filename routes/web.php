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
})->name('home');

Route::prefix('posts')->group(function () {
    // get all posts
    Route::get('/', function () {
        return view('posts');
    })->name('posts');
    // get single post vie id
    Route::get('/{post_id?}', function (
        string $post_id
    ) {

        $post_title = 'What is Lorem Ipsum?';
        $post_details = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        return view('post', ['postId' => $post_id, 'postTitle' => $post_title, 'postDetails' => $post_details]);
    })
        ->whereAlphaNumeric('post_id')
        ->name("post");
    // create new post
    Route::get('/create', function () {
        return view('create-post');
    });
});





Route::redirect("/say-hi", '/', 301);
Route::fallback(function () {
    return view('notfund');
});