<?php

namespace App\Http\Livewire\Stepper;

use Spatie\LivewireWizard\Components\WizardComponent;
use App\Http\Livewire\Stepper\Steps\CartStepComponent;
use App\Http\Livewire\Stepper\Steps\ConfirmStepComponent;
use App\Http\Livewire\Stepper\Steps\DeliveryAddressStepComponent;

class OrderWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            CartStepComponent::class,
            DeliveryAddressStepComponent::class,
            ConfirmStepComponent::class,
        ];
    }
}
