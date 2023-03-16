<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteAttachment extends Component
{
    public $confirmingAttachmentDeletion = false;
    public $item;

    public function render()
    {
        return view('livewire.delete-attachment');
    }

    public function delete($item)
    {
        return redirect()->to(route('player.attachments.destroy', ['item' => $item]));
    }
}
