<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PlayersSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (request('search')) {
            $players = User::search(trim(request('search')) ?? '')
                ->query(fn (Builder $query) => $query->with('achievement'))
                ->query(fn (Builder $query) => $query->excludeCurrentUser())
                ->simplePaginate(15);
        }
        if (request('verified')) {
            $players = User::where('verified', true)
                ->excludeCurrentUser()
                ->simplePaginate(15);
        }

        return view('players.index', ['players' => $players]);
    }
}
