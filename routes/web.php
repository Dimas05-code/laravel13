<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['tittle' => 'home page']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact page']);
});

Route::get('/blog', function () {
    return view('blog', ["tittle" => "blog page"]);
});

Route::get('/about', function () {
    return view('/about', ['tittle' => 'about page']);
});
