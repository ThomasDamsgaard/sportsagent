<?php

namespace App\Http\Livewire\Stepper\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class CartStepComponent extends StepComponent
{
    // public int $amount = 1;

    // public array $rules = [
    //     'amount' => 'numeric',
    // ];

    // public function submit()
    // {
    //     $this->validate();

    //     $this->nextStep();
    // }

    public function stepInfo(): array
    {
        return [
            'label' => 'Personal',
            'icon' => 'heroicon-s-pencil',
        ];
    }

    public function render()
    {
        return view('livewire.stepper.steps.cart');
    }
}
