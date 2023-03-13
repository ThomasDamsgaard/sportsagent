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
    public function store(Request $request)
    {

        auth()->user()->addMedia('storage/' . $request->fileupload)->toMediaCollection('attachments');

        // return $path;
        // dd($request->fileupload);
        // dd($request->files->get('file-upload')->getErrorMessage());
        // // $player->addMedia(storage_path('demo/screely.png'))->toMediaCollection();
        // $player->addMediaFromRequest('file-upload')->toMediaCollection();

        //     if ($request->file('file-pond')) {
        //         # code...
        //     }
        // return $path;

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $player)
    {
        return view('players.profile.show', ['player' => $player]);
    }
}
