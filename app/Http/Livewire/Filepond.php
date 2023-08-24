<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Filepond extends Component
{
    use WithFileUploads;

    public $files = [];

    protected $messages = [
        'files.required' => 'You must select one or more files to upload.',
    ];

    public function updatedFiles()
    {
        // $this->validate(
        //     [
        //         'files' => ['required'],
        //     ]
        // );
    }
    public function save()
    {
        // dd($this->files);

        $this->validate([
            'files' => ['required'],
        ]);

        collect($this->files)->each(function ($file) {
            auth()->user()->addMedia($file->getRealPath())->toMediaCollection('attachments');
        });

        session()->flash('flash.banner', 'Attachment Added!');
        session()->flash('flash.bannerStyle', 'success');

        // return redirect()->back();
    }

    public function render()
    {
        return view('livewire.filepond');
    }
}
