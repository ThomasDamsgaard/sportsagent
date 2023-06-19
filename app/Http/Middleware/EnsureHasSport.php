<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureHasSport
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()->sport_id) {
            return redirect()->route('player.profile.edit', ['player' => auth()->user()]);
        }
        return $next($request);
    }
}
