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

Route::get('/product-details', function(){
    return view('pages.product-details');
});

Route::get('/services', action: function(){
    return view('pages.services');
});

Route::get('/service-details', function(){
    return view('pages.service-details');
});

Route::get('/our-work', function(){
    return view('pages.our-work');
});

Route::get('/work-details', action: function(){
    return view('pages.work-details');
});

Route::get('/start-your-project', action: function(){
    return view('pages.start-your-project');
});

Route::get('/contact-us', action: function(){
    return view('pages.contact-us');
});

Route::get('/terms-and-conditions', action: function(){
    return view('pages.terms-and-conditions');
});

Route::get('/test', function(){
    return view('pages.test');
});
