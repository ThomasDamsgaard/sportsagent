<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player)
    {

        if ($request->fileupload && $request->fileupload_name) {
            $player
                ->addMedia('storage/' . $request->fileupload)
                ->sanitizingFileName(function () use ($request) {
                    return strtolower(str_replace(['#', '/', '\\', ' '], '-', $request->fileupload_name));
                })
                ->toMediaCollection('attachments');

            $request->session()->flash('flash.banner', 'Attachment Added!');
            $request->session()->flash('flash.bannerStyle', 'success');

            return redirect()->back();
        }
        // dd($request->all());

    }

    public function show(User $player)
    {
        return view('players.profile.show', ['player' => $player]);
    }
}
