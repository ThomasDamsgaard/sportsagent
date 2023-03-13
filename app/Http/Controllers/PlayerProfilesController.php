<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player): RedirectResponse
    {


        // dd($request->all());

    }

    public function show(User $player)
    {
        return view('players.profile.show', ['player' => $player]);
    }
}
