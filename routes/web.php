<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function(){
    return view('pages.about-us');
});

Route::get('/products', function(){
    return view('pages.products');
});

Route::get('/prodcut-details', function(){
    return view('pages.product-details');
});

Route::get('/services', action: function(){
    return view('pages.services');
});

Route::get('/service-details', function(){
    return view('pages.service-details');
});

Route::get('/test', function(){
    return view('pages.test');
});
