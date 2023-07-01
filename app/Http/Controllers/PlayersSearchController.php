<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PlayersSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $players = User::search(request('search'))->simplePaginate(15);
        // dd($players);

        return view('players.index', ['players' => $players]);
    }
}
