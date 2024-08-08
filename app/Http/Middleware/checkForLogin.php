<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkForLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->is('Doc/login')) {
            // Check if the authenticated admin user is set
            if (isset(Auth::guard('Doctor')->user()->name)) {
                // Redirect to the admin dashboard
                return redirect()->route('doc.index');
            }
        }
        return $next($request);
    }
}
