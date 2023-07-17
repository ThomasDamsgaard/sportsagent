<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Database\Eloquent\Builder;

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
            ->when(request('age-to'), function ($query) {
                $query->whereBetween(
                    'age',
                    [
                        Carbon::now()->subYears(request('age-to')),
                        Carbon::now()->subYears(request('age-from')) ?: 50,
                    ]
                );
            })
            ->with('achievement')
            ->excludeCurrentUser()
            ->simplePaginate(15);
        // }

        // dd(request());

        // dd(Carbon::now()->subYears(request('age-from')));


        return view('players.index', ['players' => $players]);
    }
}
