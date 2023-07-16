<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class PlayersSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $users = QueryBuilder::for(User::class)
        //     ->allowedFilters(['verified'])
        //     ->excludeCurrentUser()
        //     ->simplePaginate(15);


        // if (request('search')) {
        //     $players = User::search(trim(request('search')) ?? '')
        //         ->query(fn (Builder $query) => $query->with('achievement'))
        //         ->query(fn (Builder $query) => $query->excludeCurrentUser())
        //         ->simplePaginate(15);
        // }
        // if (request('verified')) {
        $players = User::query()
            ->where('type', 'player')
            ->when(request('verified'), function ($query) {
                $query->where('verified', true);
            })
            ->when(request('position'), function ($query) {
                $query->whereIn('position', array_values(request('position')))->get();
            })
            ->with('achievement')
            ->excludeCurrentUser()
            ->simplePaginate(15);
        // }

        // dd(request()->query('position'));


        return view('players.index', ['players' => $players]);
    }
}
