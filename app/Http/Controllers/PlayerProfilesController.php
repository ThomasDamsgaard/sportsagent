<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player): RedirectResponse
    {
        $player->attributable->update([
            'height' => $request->height,
            'weight' => $request->weight,
            'positions' => $request->positions,
            'salary' => $request->salary,
            'currency' => $request->currency,
            'city' => $request->city,
            'country' => $request->country,
            'biography' => $request->biography,
            'continents' => $request->continents,
            'career' => $request->career,
        ]);

        $request->session()->flash('flash.banner', 'Profile Edited!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('player.profile.edit', ['player' => $player]);
    }

    public function edit(User $player)
    {
        return view('players.profile.edit', ['player' => $player]);
    }
}
