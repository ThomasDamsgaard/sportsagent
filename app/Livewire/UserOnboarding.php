<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class UserOnboarding extends Component
{
    public $showModal = true;

    public function closeModal(): void
    {
        $this->showModal = false;
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.user-onboarding');
    }
}
