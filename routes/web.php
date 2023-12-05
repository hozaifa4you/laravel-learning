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

$user = [
    "name" => "Yousuf Ahamd",
    "email" => "yousuf360.ya@gmail.ocm",
    "age" => 28,
    "mobile" => "01918780770",
    "address" => "Satkhira",
];

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('posts')->group(function () {
    // get all posts
    Route::get('/', function () {
        return view('pages.posts');
    })->name('posts');

    // get single post vie id
    Route::get('/{post_id?}', function (
        string $post_id
    ) {
        return view('pages.post');
    })
        ->whereAlphaNumeric('post_id')
        ->name("post");

    // create new post
    Route::get('/create', function () {
        return view('create-post');
    })->name('create');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/user', function () {
    $user = [
        "name" => "Yousuf Ahamd",
        "email" => "yousuf360.ya@gmail.ocm",
        "age" => 28,
        "mobile" => "01918780770",
        "address" => "Satkhira",
        "brothers" => ["Anamul Hasan", "Ather Rahman", "Ibrahim Khalil", "Niloy Jamil", "Abu Huraira"],
        "city" => ["Dhaka", "Chattogram", "Satkhira", "Khulna"]
    ];

    return view('pages.user', ['user' => $user]);
})->name('user');



Route::redirect("/say-hi", '/', 301);
Route::fallback(function () {
    return view('notfund');
});
