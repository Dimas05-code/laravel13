<?php

use Illuminate\Support\Facades\Route;
use Termwind\Components\Dd;
use Illuminate\Support\Arr;

$array = [100, 200, 300];

$first = Arr::first($array, function (int $value, int $key) {
    return $value >= 150;
});

// 200

Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

Route::get('/post', function () {
    $posts = [[
        'id' => 1,
        'slug' => 'article-1',
        'tittle' => 'Article 1',
        'author' => 'Dimas Wahyu Nugroho',
        'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam quaerat    consectetur alias porro deserunt recusandae error eaque saepe ipsum sapiente dignissimos ut ex quis dolores officia vel maxime, facere reprehenderit.'
    ], [
        'id' => 2,
        'slug' => 'article-2',
        'tittle' => 'Artikel 2',
        'author' => 'Muhammad Adit',
        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eaque expedita enim in
            magnam natus nam repellendus ab laboriosam amet omnis, corrupti consequatur repudiandae ullam consequuntur
            provident temporibus esse assumenda.'
    ]];
    return view('post', ["tittle" => "blog page", 'posts' => $posts]);
});

// teknik route wildcard => menangkap  nilai dan di masukkean ke variabel
Route::get('/post/{slug}', function ($slug) {
    // dd($id);

    // ini hanya simulasi (teknik yang tidak recomended)
    $posts = [[
        'id' => 1,
        'slug' => 'article-1',
        'tittle' => 'Article 1',
        'author' => 'Dimas Wahyu Nugroho',
        'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam quaerat    consectetur alias porro deserunt recusandae error eaque saepe ipsum sapiente dignissimos ut ex quis dolores officia vel maxime, facere reprehenderit.'
    ], [
        'id' => 2,
        'slug' => 'article-2',
        'tittle' => 'Artikel 2',
        'author' => 'Muhammad Adit',
        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eaque expedita enim in
            magnam natus nam repellendus ab laboriosam amet omnis, corrupti consequatur repudiandae ullam consequuntur
            provident temporibus esse assumenda.'
    ]];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // jika id tidak ditemukan
    if (!$post) abort(404);

    // dd($post);
    return view('posts', ['tittle' => 'singular post', 'posts' => $post]);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'about page']);
});
