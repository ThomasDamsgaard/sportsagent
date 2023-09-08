<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Attachment extends Component
{
    use WithFileUploads;

    public $files = [];

    protected $messages = [
        'files.required' => 'You must select one or more files to upload.',
    ];

    public function save()
    {
        $this->validate([
            'files' => ['required'],
        ]);

        collect($this->files)->each(function ($file) {
            auth()->user()
                ->addMedia($file->getRealPath())
                ->usingName($file->getClientOriginalName())
                ->toMediaCollection('attachments');
        });

        session()->flash('flash.banner', 'Attachment Added!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->to(route('player.profile.edit', ['player' => auth()->user()]));
    }

    public function render()
    {
        return view('livewire.attachment');
    }
}
