<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use App\Http\Livewire\Stepper\OrderWizardComponent;
use App\Http\Livewire\Stepper\Steps\PersonalStepComponent;
use App\Http\Livewire\Stepper\Steps\ConfirmStepComponent;
use App\Http\Livewire\Stepper\Steps\AttachmentsStepComponent;

class LivewireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Livewire::component('order-wizard', OrderWizardComponent::class);
        Livewire::component('personal', PersonalStepComponent::class);
        Livewire::component('attachments', AttachmentsStepComponent::class);
        Livewire::component('confirm', ConfirmStepComponent::class);
    }
}
