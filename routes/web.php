<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/teams', function () {
        $teams = Team::all();
        return view('teams', ['teams' => $teams]);
    })->name('teams');

    Route::get('/players', function () {
        $players = User::where('type', 'player')->get();
        return view('players.index', ['players' => $players]);
    })->name('players');

    Route::get('/players/*', function () {
        $players = User::where('type', 'player')->get();
        return view('players.index', ['players' => $players]);
    })->name('players');
});
