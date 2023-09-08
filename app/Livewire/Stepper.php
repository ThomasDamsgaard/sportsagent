<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Stepper extends Component
{
    use WithFileUploads;

    public int $currentStep = 1;
    public $age, $biography;
    public string $successMessage = '';
    public array $fileupload = [];


    public function render()
    {
        return view('livewire.stepper');
    }

    public function firstStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'age' => 'required',
        //     'biography' => 'required',
        // ]);

        $this->currentStep = 2;

        // dd($this->currentStep);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'stock' => 'required',
        //     'status' => 'required',
        // ]);



        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        // Product::create([
        //     'name' => $this->name,
        //     'amount' => $this->amount,
        //     'description' => $this->description,
        //     'stock' => $this->stock,
        //     'status' => $this->status,
        // ]);

        $this->successMessage = 'Product Created Successfully.';

        // $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function clearForm()
    // {
    //     $this->name = '';
    //     $this->amount = '';
    //     $this->description = '';
    //     $this->stock = '';
    //     $this->status = 1;
    // }

    public function save()
    {
        // $this->validate([
        //     'fileupload.*' => 'image|max:1024',
        // ]);

        foreach ($this->fileupload as $upload) {
            $upload->store('fileupload');
        }
    }
}
