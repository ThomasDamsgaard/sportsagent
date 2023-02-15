<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PlayerProfilesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $player)
    {
        // dd($player->id);
        // dd($request->file('file-upload'));
        foreach ($request->input('file-upload', []) as $file) {
            dd($file);

            $player->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $player)
    {
        return view('players.profile', ['player' => $player]);
    }
}
