<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureHasSport;
use App\Http\Controllers\StepperController;

Route::get('/player/stepper/first', [StepperController::class, 'first'])
    ->withoutMiddleware([EnsureHasSport::class])->name('stepper.first');

Route::get('/player/stepper/second', [StepperController::class, 'second'])
    ->withoutMiddleware([EnsureHasSport::class])->name('stepper.second');
