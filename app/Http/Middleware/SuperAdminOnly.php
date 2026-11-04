<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $superAdminEmails = array_map(
            'trim',
            array_filter(explode(',', env('SUPER_ADMIN_EMAILS', 'aidil@dev')))
        );

        if (!in_array($request->user()->email, $superAdminEmails)) {
            abort(403, 'Akses Ditolak');
        }

        return $next($request);
    }
}
