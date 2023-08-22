<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/for-players', function () {
    return view('players');
})->name('players');

Route::get('/for-teams', function () {
    return view('teams');
})->name('teams');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/features', function () {
    return view('features');
})->name('features');
