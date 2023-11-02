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
        $validated = $request->safe()->all();

        $player->update($validated);

        $player->update([
            'positions' => json_encode($validated['positions']),
            'continents' => json_encode($validated['continents']),
        ]);

        $request->session()->flash('flash.banner', 'Profile Updated!');
        $request->session()->flash('flash.bannerStyle', 'success');

        UserOnboarded::dispatch($player);

        return redirect()->route('player.profile.edit', ['player' => $player]);
    }
}
