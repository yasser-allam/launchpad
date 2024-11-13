<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function(){
    return view('pages.about-us');
});

Route::get('/procut-details', function(){
    return view('pages.product-details');
});

Route::get('/test', function(){
    return view('pages.test');
});
