<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoachesController extends Controller
{
    public function index(): View
    {
        $coaches = User::query()
            ->where('type', 'coach')
            ->where('id', '!=', auth()->user()->id)
            ->simplePaginate(15);

        return view('coaches.index', ['coaches' => $coaches]);
    }

    public function show(User $coach): View
    {
        $coach = $coach->load(['testimonials.writer' => function ($query) {
            $query->withoutGlobalScope(GenderScope::class);
        }]);

        return view('coaches.show', ['coach' => $coach]);
    }
}
