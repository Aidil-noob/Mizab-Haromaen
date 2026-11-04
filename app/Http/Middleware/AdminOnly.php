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
        $user = $request->user();

        $allowedEmails = array_map(
            'trim',
            array_filter(explode(',', env('ADMIN_EMAILS', '')))
        );

        if (!($user->is_admin ?? false) && !in_array($user->email, $allowedEmails)) {
            abort(403, 'Akses Ditolak');
        }

        return $next($request);
    }
}
