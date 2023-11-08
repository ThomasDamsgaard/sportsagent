<?php

namespace App\Http\Controllers;

use App\Events\UserOnboarded;
use App\Http\Requests\UserOnboardingRequest;
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

    public function store(UserOnboardingRequest $request, User $player): RedirectResponse
    {
        $player->update($request->safe()->only([
            'sport_id',
            'name',
            'gender',
            'nationality',
            'age',
        ]));

        $player->attributable()->update($request->safe()->except([
            'sport_id',
            'name',
            'gender',
            'nationality',
            'age',
        ]));

        $player->attributable()->update([
            'positions' => json_encode($request->safe()->only(['positions'])['positions']),
            'continents' => $request->safe()->only(['continents'])['continents'],
        ]);

        $request->session()->flash('flash.banner', 'Profile Updated!');
        $request->session()->flash('flash.bannerStyle', 'success');

        UserOnboarded::dispatch($player);

        return redirect()->route('player.profile.edit', ['player' => $player]);
    }
}
