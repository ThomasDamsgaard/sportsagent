<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureHasSport;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\CoachesController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\ImpersonationController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PlayerProfilesController;
use App\Http\Controllers\Teams\TeamsFilterController;
use App\Http\Controllers\Teams\TeamsSearchController;

require __DIR__ . '/public.php';

require __DIR__ . '/subscription.php';

require __DIR__ . '/email.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    // 'verified',
    // 'subscribed',
    'sport',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
    Route::get('/coaches', [CoachesController::class, 'index'])->name('coaches.index');
    Route::get('/players/show/{player}', [PlayersController::class, 'show'])->name('player.show');
    Route::get('/coaches/show/{coach}', [CoachesController::class, 'show'])->name('coach.show');
    Route::get('/players/create', [PlayersController::class, 'create'])->name('player.create');

    // require __DIR__ . '/stepper.php';

    Route::get('/teams/search', TeamsSearchController::class)->name('teams.search.index');
    Route::get('/teams/filter', TeamsFilterController::class)->name('teams.filter.index');

    Route::get('/player/profile/{player}', [PlayerProfilesController::class, 'edit'])
        ->withoutMiddleware([EnsureHasSport::class])->name('player.profile.edit');
    Route::patch('/player/profile/{player}', [PlayerProfilesController::class, 'update'])
        ->withoutMiddleware([EnsureHasSport::class])->name('player.profile.update');


    Route::post('/player/attachments/{player}', [AttachmentsController::class, 'store'])->name('player.attachments.store');
    Route::get('/player/attachments/{item}', [AttachmentsController::class, 'show'])->name('player.attachments.show');
    Route::get('/player/attachments/delete/{item}', [AttachmentsController::class, 'destroy'])->name('player.attachments.destroy');

    Route::get('/search', SearchController::class)->name('search.index');
    Route::get('/filter', FilterController::class)->name('filter.index');

    Route::post('/upload', function (Request $request) {
        $path = $request->file('fileupload')->store('tmp', 'public');

        return $path;
    });

    Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
    Route::get('/teams/show/{team}', [TeamsController::class, 'show'])->name('team.show');
    // Route::get('/teams/create', [TeamsController::class, 'create'])->name('team.create');
});

Route::get('/impersonation/{userId}', [ImpersonationController::class, 'create'])->name('impersonation.create');
Route::get('/impersonation', [ImpersonationController::class, 'destroy'])->name('impersonation.destroy');

require __DIR__ . '/social.php';
