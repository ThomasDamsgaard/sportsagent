<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class PlayersSearchController extends Controller
{
    public function __invoke()
    {
        $players = User::search(trim(request('search')) ?? '')
            ->where('type', 'player')
            ->query(fn (Builder $query) => $query->with('achievement'))
            ->query(fn (Builder $query) => $query->excludeCurrentUser())
            ->simplePaginate(15);

        return view('players.index', ['players' => $players]);
    }
}
