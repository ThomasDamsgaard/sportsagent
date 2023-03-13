<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PlayerProfilesController extends Controller
{
    public function update(Request $request, User $player): RedirectResponse
    {

        if ($request->fileupload && $request->fileupload_name) {
            $validated = $request->validate([
                'fileupload' => 'required|mimetypes:application/pdf,image/png,image/jpeg,video/mpeg,video/quicktime',
                'fileupload_name' => 'required|max:100',
            ]);

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
