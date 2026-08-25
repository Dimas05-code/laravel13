<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Post extends Model
{
    // public static function all()
    // {
    //     return [[
    //         'id' => 1,
    //         'slug' => 'article-1',
    //         'tittle' => 'Article 1',
    //         'author' => 'Dimas Wahyu Nugroho',
    //         'isi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam quaerat    consectetur alias porro deserunt recusandae error eaque saepe ipsum sapiente dignissimos ut ex quis dolores officia vel maxime, facere reprehenderit.'
    //     ], [
    //         'id' => 2,
    //         'slug' => 'article-2',
    //         'tittle' => 'Artikel 2',
    //         'author' => 'Muhammad Adit',
    //         'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eaque expedita enim in
    //         magnam natus nam repellendus ab laboriosam amet omnis, corrupti consequatur repudiandae ullam consequuntur
    //         provident temporibus esse assumenda.'
    //     ]];
    // }

    // method pencarian data
    // public static function find($slug)
    // {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug;
    // });

    // menggunakan arrow function
    //     return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    // }
}
