<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

Route::get('/blog', function () {
    return view('blog');
});
