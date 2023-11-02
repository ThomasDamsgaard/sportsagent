<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class EditUserForm extends Form
{
    public ?User $user;

    #[Rule('required')]
    public $sport_id = 1;

    #[Rule('required')]
    public $name = '';

    #[Rule('required')]
    public $gender = '';

    #[Rule('required')]
    public $nationality = '';

    #[Rule('required')]
    public $age = '';

    #[Rule('required')]
    public $height = '';

    #[Rule('required')]
    public $weight = '';

    #[Rule('required')]
    public $salary = '';

    // #[Rule('required')]
    // public $currency = '';

    #[Rule('required')]
    public $city = '';

    #[Rule('required')]
    public $country = '';

    #[Rule('required')]
    public $biography = '';

    #[Rule('required')]
    public $positions = [];

    #[Rule('required')]
    public $continents = [];

    #[Rule('required')]
    public $career = '';

    public function setUser(User $user)
    {
        $this->user = $user;
        $this->nationality = $user->nationality;
        $this->age = $user->age;
        $this->height = $user->height;
        $this->weight = $user->weight;
        $this->salary = $user->salary;
        // $this->currency = $user->currency;
        $this->city = $user->city;
        $this->country = $user->country;
        $this->biography = $user->biography;
        $this->positions = $user->positions;
        $this->continents = $user->continents;
        $this->career = $user->career;
    }

    public function update()
    {
        $this->user->update(
            $this->all()
        );
    }
}
