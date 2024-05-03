<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Jika pengguna belum login atau tidak memiliki peran yang sesuai, redirect ke halaman unauthorized
        if (!$user || !in_array($user->role->name, $roles)) {
            return redirect()->route('utama');
        }

        return $next($request);
    }
}
