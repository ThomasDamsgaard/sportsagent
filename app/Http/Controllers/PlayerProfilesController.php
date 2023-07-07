<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player): RedirectResponse
    {
        // dd($request);
        $player->update([
            'sport_id' => $request->sport_id ? $request->sport_id : $player->sport_id,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'position' => json_encode($request->position),
            'salary' => $request->currency . $request->salary,
            'city' => $request->city,
            'country' => $request->country,
            'biography' => $request->biography,
        ]);

        // if (url()->previous() == route('stepper.first')) {
        //     return redirect()->route('stepper.second');
        // }

        $request->session()->flash('flash.banner', 'Profile Edited!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    public function edit(User $player)
    {
        return view('players.profile.edit', ['player' => $player]);
    }
}
