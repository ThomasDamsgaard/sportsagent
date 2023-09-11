<?php

use Illuminate\Support\Facades\Route;

Route::get('/prospects', function () {
    return view('prospects');
})->name('prospects');
