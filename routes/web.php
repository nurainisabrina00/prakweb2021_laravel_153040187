<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'name' => 'sabrina',
        'email' => 'nurainisabrina9@gmail.com',
        'image' => 'profile.jpg'
    ]);
});

Route::get('/blog', function () {

$blog_posts = [
    [
        'title' => 'judul post pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'sabrina',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ],
    [
        'title' => 'judul post kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'bejo',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ],
];

    return view('posts', [
        'title' => 'posts',
        'posts' => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

$blog_posts = [
    [
        'title' => 'judul post pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'sabrina',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ],
    [
        'title' => 'judul post kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'bejo',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ],
];

$new_post = [];
foreach($blog_posts as $post) {
    if($post['slug'] == $slug) {
        $new_post = $post;
    }
}

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});