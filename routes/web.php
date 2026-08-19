<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

Route::get('/post', function () {
    $posts = [[
        'title' => 'Article 1',
        'author' => 'Dimas Wahyu Nugroho',
        'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam quaerat    consectetur alias porro deserunt recusandae error eaque saepe ipsum sapiente dignissimos ut ex quis dolores officia vel maxime, facere reprehenderit.'
    ]];
    return view('post', ["tittle" => "blog page", 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'about page']);
});
