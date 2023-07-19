<?php

namespace App\Http\Controllers;

use App\Models\User;

class PlayersFilterController extends Controller
{
    public function __invoke()
    {
        $players = User::query()
            ->onlyPlayers()
            ->playerSearchFilters()
            ->with('achievement')
            ->excludeCurrentUser()
            ->simplePaginate(15);

        return view('players.index', ['players' => $players]);
    }
}
