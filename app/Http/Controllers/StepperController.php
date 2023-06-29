<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepperController extends Controller
{
    public function first()
    {
        return view('players.profile.stepper.index', ['step' => 1]);
    }

    public function second()
    {
        return view('players.profile.stepper.index', ['step' => 2]);
    }
}
