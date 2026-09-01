<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

Route::get('/post', function () {
    // memamnggil class post yang diatas
    $post = Post::all();

    return view('post', ['tittle' => 'blog pagee', 'posts' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('post', ['tittle' => 'article by ' . $user->name, 'posts' => $user->posts]);
});

// teknik route wildcard => menangkap  nilai dan di masukkean ke variabel
Route::get('/post/{post:slug}', function (Post $post) //==> sudah menggunakan route mode binding
{

    // dd($id); ==> untuk melihat data arraydd

    // $post = Post::find($slug);

    // jika id tidak ditemukan
    // if (!$post) abort(404);

    // dd($post);
    return view('posts', ['tittle' => 'singular post', 'posts' => $post]);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'about page']);
});
