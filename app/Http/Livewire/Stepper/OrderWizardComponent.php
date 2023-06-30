<?php

namespace App\Http\Livewire\Stepper;

use Spatie\LivewireWizard\Components\WizardComponent;
use App\Http\Livewire\Stepper\Steps\ConfirmStepComponent;
use App\Http\Livewire\Stepper\Steps\PersonalStepComponent;
use App\Http\Livewire\Stepper\Steps\AttachmentsStepComponent;

class OrderWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            PersonalStepComponent::class,
            AttachmentsStepComponent::class,
            ConfirmStepComponent::class,
        ];
    }
}
