<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ImpersonationController;

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

Route::domain('{subdomain}.sportsagent.test')->group(function () {
    Route::get('/', function ($subdomain) {
        return $subdomain;
    });
});

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

    Route::get('/impersonation/{userId}', [ImpersonationController::class, 'create'])->name('impersonation.create');
    Route::get('/impersonation', [ImpersonationController::class, 'destroy'])->name('impersonation.destroy');

    Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
    Route::get('/players/show/{player}', [PlayersController::class, 'show'])->name('player.show');
    Route::get('/players/create', [PlayersController::class, 'create'])->name('player.create');

    Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
    Route::get('/teams/show/{team}', [TeamsController::class, 'show'])->name('team.show');
    // Route::get('/teams/create', [TeamsController::class, 'create'])->name('team.create');
});
