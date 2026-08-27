<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedEmails = explode(',', env('ADMIN_EMAILS', ''));
        
        if (!in_array($request->user()->email, $allowedEmails)) {
            abort(403, 'Akses Ditolak');
        }
        
        return $next($request);
    }
}
