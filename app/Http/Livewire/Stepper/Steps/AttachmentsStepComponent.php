<?php

namespace App\Http\Livewire\Stepper\Steps;

use Livewire\WithFileUploads;
use Spatie\LivewireWizard\Components\StepComponent;

class AttachmentsStepComponent extends StepComponent
{
    use WithFileUploads;

    public $files = [];

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Attachments',
            'icon' => 'heroicon-s-pencil',
        ];
    }

    public function render()
    {
        return view('livewire.stepper.steps.attachments');
    }
}
