<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // Not Logged
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Not allowed
        if($role !== null && !$request->user()->hasRole($role)) {
            return abort(403);
        }

        return $next($request);
    }
}
