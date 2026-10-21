<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (! in_array($request->user()->email, config('admin.emails'))) {
            abort(403, 'Akses Ditolak.');
        }

        return $next($request);
    }
}