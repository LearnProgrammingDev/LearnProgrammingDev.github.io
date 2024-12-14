<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get("/projects", function () {
    return view('projects.index');
});

Route::get("/posts", function () {
    return view('posts.index');
});

Route::get("/about", function () {
    return view('about.index');
});

Route::get("/contact", function () {
    return view('contact.index');
});