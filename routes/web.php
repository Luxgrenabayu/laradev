<?php

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/article', function () {
    return view('frontend/article');
});

Route::get('/category', function () {
    return view('frontend/category');
});

Route::get('/about', function () {
    return view('frontend/category');
});



// Backend Rooute
