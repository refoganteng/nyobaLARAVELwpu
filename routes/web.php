<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about',['nama' => 'Revo Nando']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact',['email'=>"refonndd@gmail.com"],['instagram'=>'refonnddd']);
});