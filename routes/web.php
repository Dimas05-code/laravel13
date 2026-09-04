<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// 1. Halaman Home
Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

// 2. Halaman Contact
Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

// 3. Halam Semua Daftar Posts
Route::get('/posts', function () {
    // memamnggil class post yang diatas
    $posts = Post::all();

    return view('posts', ['tittle' => 'blog pagee', 'posts' => $posts]);
});

// 4. Halaman Daftar Artikel Berdasarkan Penulis
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['tittle' => 'Ada ' . count($user->posts) . ' article by ' . $user->name, 'posts' => $user->posts]);
});

// 5. Halaman Detail Satu Artikel ( Rute diubah menjadi /posts{slug} agar rapi)
// teknik route wildcard => menangkap  nilai dan di masukkean ke variabel
Route::get('/posts/{post:slug}', function (Post $post) //==> sudah menggunakan route mode binding
{

    // dd($id); ==> untuk melihat data arraydd

    // $post = Post::find($slug);

    // jika id tidak ditemukan
    // if (!$post) abort(404);

    // dd($post);
    return view('post', ['tittle' => 'singular post', 'post' => $post]);
});

// 6. Halaman About
Route::get('/about', function () {
    return view('about', ['tittle' => 'about page']);
});
