<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class PlayersSearchController extends Controller
{
    public function __invoke()
    {
        $players = User::search(trim(request('search')) ?? '')
            ->query(fn (Builder $query) => $query->with('achievement'))
            ->query(fn (Builder $query) => $query->excludeCurrentUser())
            ->query(fn (Builder $query) => $query->onlyPlayers())
            ->simplePaginate(15);

        return view('players.index', ['players' => $players]);
    }
}
