<?php

namespace App\Livewire;

use App\Livewire\Forms\EditUserForm;
use App\Models\User;
use App\Services\User\Continent;
use App\Services\User\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserOnboarding extends Component
{
    public $showModal = true;
    public User $user;
    public EditUserForm $form;
    public Country $countries;
    public Continent $continents;

    public function mount(Country $countries, Continent $continents, User $user): void
    {
        $this->form->setUser($user);
        $this->countries = $countries;
        $this->continents = $continents;

        // dd($this->user);
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function update(): RedirectResponse
    {
        $this->validate();

        auth()->user()->update(
            $this->form->all()
        );

        return $this->redirect('/dashboard');
    }

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.user-onboarding');
    }
}
