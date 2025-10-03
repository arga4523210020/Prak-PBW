<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('Kontak');
});
