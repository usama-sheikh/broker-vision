<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::check()) {
                    if(auth()->user()->type == '1')
                        $user_view = 'admin.dashboard';
                    elseif(auth()->user()->type == '2')
                        $user_view = 'user.dashboard';
                    else
                        return response()->view('errors.' . '404', [], 404);

                    return redirect()->route($user_view);
                }

                return redirect()->route('login');
            }
        }

        return $next($request);
    }
}
