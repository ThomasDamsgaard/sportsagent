<?php

namespace App\Livewire;

use Livewire\Component;

class OnboardingModal extends Component
{
    public bool $showModal = true;

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.onboarding-modal');
    }
}
