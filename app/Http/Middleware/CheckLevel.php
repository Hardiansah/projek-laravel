<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLevel
{
    public function handle(
        Request $request,
        Closure $next,
        ...$levels
    ): Response {

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (!in_array(auth()->user()->level, $levels)) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}