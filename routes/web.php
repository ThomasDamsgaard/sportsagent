<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\ImpersonationController;
use App\Http\Controllers\PlayerProfilesController;

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

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');


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

    Route::get('/player/profile/{player}', [PlayerProfilesController::class, 'show'])->name('player.profile.show');
    Route::patch('/player/profile/{player}', [PlayerProfilesController::class, 'update'])->name('player.profile.update');

    Route::post('/player/attachments/{player}', [AttachmentsController::class, 'store'])->name('player.attachments.store');
    Route::get('/player/attachments/{item}', [AttachmentsController::class, 'show'])->name('player.attachments.show');
    Route::get('/player/attachments/delete/{item}', [AttachmentsController::class, 'destroy'])->name('player.attachments.destroy');

    Route::post('/upload', function (Request $request) {
        $path = $request->file('fileupload')->store('tmp', 'public');

        return $path;
    });

    Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
    Route::get('/teams/show/{team}', [TeamsController::class, 'show'])->name('team.show');
    // Route::get('/teams/create', [TeamsController::class, 'create'])->name('team.create');
});
