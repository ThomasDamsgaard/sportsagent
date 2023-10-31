<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/prospects', function () {
    return view('prospects');
})->name('prospects');

Route::get('api', function () {
    $response = Http::withHeaders([
        'x-apisports-key' => config('services.api-sports.key'),
    ])
        ->get('https://v1.basketball.api-sports.io/teams', [
            // 'season' => '2019-2020',
            // 'team' => '139',
            'country' => 'denmark'
        ]);

    return $response->json();
});
