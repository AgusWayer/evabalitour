<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'Your Friendly Woman Guide'
    ]);
});

Route::get('/about-us', function () {
    return view('about',[
        'title' => 'About Eva Bali Tours'
    ]);
});

