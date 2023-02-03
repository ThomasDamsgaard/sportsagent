<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Scopes\SportScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonationController extends Controller
{
    public function create($userId)
    {
        $originalId = Auth::id();

        // Put a session variable to be able to log back in again as admin
        session()->put('impersonation', $originalId);
        Auth::guard('web')->loginUsingId($userId);

        return redirect()->route('dashboard');
    }

    public function destroy()
    {
        if (!session()->has('impersonation')) {
            abort(403);
        }

        Auth::guard('web')->login(User::withoutGlobalScope(SportScope::class)->find(session('impersonation')));
        session()->forget('impersonation');

        return redirect()->route('dashboard');
    }
}
