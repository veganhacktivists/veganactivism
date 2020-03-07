<?php

namespace App\Http\Middleware;

use Closure;
use Visitor;

class LogVisit
{
    /**
     * Log a visit.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Visitor::log();

        return $next($request);
    }
}
