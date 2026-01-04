<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next): Response
    {
        // User login hai?
        if (!auth()->check()) {
            return redirect('/login');
        }

        // User admin hai?
        if (trim(auth()->user()->role) !== 'admin') {
            abort(403, 'Unauthorized access');
        }

        return $next($request);
    }
}
