<?php

namespace App\Http\Livewire\Stepper\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class PersonalStepComponent extends StepComponent
{
    public int $sport = 1;
    public string $age, $position, $salary, $currency = '$', $biography;


    public array $rules = [
        'sport' => 'required',
        'age' => 'required',
        'position' => 'required',
        'salary' => 'required',
        'biography' => 'required',
    ];

    public function submit()
    {
        // $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Personal',
            'icon' => 'heroicon-s-pencil',
        ];
    }

    public function render()
    {
        return view('livewire.stepper.steps.personal');
    }
}
