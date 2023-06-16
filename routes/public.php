<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/features', function () {
    return view('features');
})->name('features');
