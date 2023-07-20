<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function __invoke(): View
    {
        $users = User::search(trim(request('search')) ?? '')
            ->where('type', request('_type'))
            ->query(fn (Builder $query) => $query->with('achievement'))
            ->query(fn (Builder $query) => $query->excludeCurrentUser())
            ->simplePaginate(15);

        return view(request('_model') . '.index', [request('_model') => $users]);
    }
}
