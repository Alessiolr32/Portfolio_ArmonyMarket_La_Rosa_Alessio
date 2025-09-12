<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RevisorMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->is_revisor) {
            return redirect()->route('home')->with('error', __('ui.no_permission'));
        }
        return $next($request);
    }
}
