<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AttachmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $player): RedirectResponse
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $item): Media
    {
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function destroy(Request $request, Media $item): RedirectResponse
    {
        $item->delete();

        $request->session()->flash('flash.banner', 'Attachment Deleted!');
        $request->session()->flash('flash.bannerStyle', 'error');

        return redirect()->back();
    }
}
