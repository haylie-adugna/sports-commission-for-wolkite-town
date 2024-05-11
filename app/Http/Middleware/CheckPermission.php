<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    public function handle($request, Closure $next)
    {
         if (! $request->user()) {
            abort(403, 'Unauthorized action.');
        }

        // Your permission checking logic goes here
        if (! $request->user()->hasPermission()) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
