<?php

namespace App\Http\Controllers;

use App\Events\UserOnboarded;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserOnboardingController extends Controller
{
    public function index(User $player): View
    {
        return view('players.onboarding.index', ['player' => $player]);
    }

    public function store(Request $request, User $player): RedirectResponse
    {
        $player->update([
            'sport_id' => $request->sport_id,
            'name' => $request->name,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'positions' => json_encode($request->positions),
            'salary' => $request->currency . $request->salary,
            'city' => $request->city,
            'country' => $request->country,
            'biography' => $request->biography,
            'continents' => json_encode($request->continents),
            'career' => $request->career,
        ]);

        $request->session()->flash('flash.banner', 'Profile Updated!');
        $request->session()->flash('flash.bannerStyle', 'success');

        UserOnboarded::dispatch($player);
        return redirect()->route('player.profile.edit', ['player' => $player]);
    }
}
