<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player): RedirectResponse
    {


        dd($request->all());

        $request->session()->flash('flash.banner', 'Profile Edited!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    public function edit(User $player)
    {
        return view('players.profile.edit', ['player' => $player]);
    }
}
