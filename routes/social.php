<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.index');

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate([
        'google_id' => $googleUser->id
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'profile_photo_path' => $googleUser->avatar,
        'google_token' => $googleUser->token,
        'google_refresh_token' => $googleUser->refreshToken
    ]);

    Auth::login($user);

    return redirect('/dashboard');
})->name('google.show');
