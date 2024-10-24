<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Artikel ke-1',
            'title' => 'Artikel ke-1',
            'author' => 'Rizki Nugroho A',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eveniet ab maxime, amet error labore nostrum,
            quo, perferendis magni possimus facere sapiente aliquam? Magnam, dignissimos illo? Magni accusamus culpa
            necessitatibus.'
        ],
        [
            'id' => 2,
            'slug' => 'Artikel ke-2',
            'title' => 'Artikel ke-2',
            'author' => 'Rizki Nugroho A',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, magnam veniam iure dolor cum, quos dicta
            labore repellat suscipit inventore dolore quibusdam, illo deleniti voluptate iusto minus perferendis fugiat
            aliquid.'
        ]
    ]]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Artikel ke-1',
            'title' => 'Artikel ke-1',
            'author' => 'Rizki Nugroho A',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eveniet ab maxime, amet error labore nostrum,
            quo, perferendis magni possimus facere sapiente aliquam? Magnam, dignissimos illo? Magni accusamus culpa
            necessitatibus.'
        ],
        [
            'id' => 2,
            'slug' => 'Artikel ke-2',
            'title' => 'Artikel ke-2',
            'author' => 'Rizki Nugroho A',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, magnam veniam iure dolor cum, quos dicta
            labore repellat suscipit inventore dolore quibusdam, illo deleniti voluptate iusto minus perferendis fugiat
            aliquid.'
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        return view('post', ['title' => 'Sinle Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rizki Nugroho A', 'title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

