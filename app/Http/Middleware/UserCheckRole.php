<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
{
    $user = auth()->user();

    if ($user && in_array($user->role, $roles)) {
        return $next($request);
    }

    

    return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman admin.');
}
}
