<?php

namespace App\Http\Controllers;

use App\Models\User;

class FilterController extends Controller
{
    public function __invoke()
    {
        $users = User::query()
            ->searchFilters(request('_type'))
            ->with('achievement')
            ->excludeCurrentUser()
            ->simplePaginate(15);

        return view(request('_model') . '.index', [request('_model') => $users]);
    }
}
