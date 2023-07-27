<?php

namespace App\Http\Controllers\Teams;

use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class TeamsFilterController extends Controller
{
    public function __invoke()
    {

        dd(request());
        $teams = Team::search(trim(request('country')) ?? '')
            // ->query(fn (Builder $query) => $query->when(request('verified'), function ($query) {
            //     $query->where('verified', true);
            // }))
            ->simplePaginate(15);

        // Team::query()
        //     ->where(request('country'), 'country')
        //     ->simplePaginate(15);

        return view('squads.index', ['teams' => $teams]);
    }
}
