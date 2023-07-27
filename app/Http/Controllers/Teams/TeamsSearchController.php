<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamsSearchController extends Controller
{
    public function __invoke()
    {
        $teams = Team::search(trim(request('search')) ?? '')
            ->simplePaginate(15);

        return view('squads.index', ['teams' => $teams]);
    }
}
