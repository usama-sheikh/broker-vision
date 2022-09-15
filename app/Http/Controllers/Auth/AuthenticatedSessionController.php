<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.Authentication.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        /* Check User Type */
        if(auth()->user()->type == '1')
            $user_route = 'admin.login';
        elseif(auth()->user()->type == '2')
            $user_route = 'login';
        else
            return response()->view('errors.' . '404', [], 404);

        return redirect()->route($user_route);

    /*return redirect()->intended(RouteServiceProvider::HOME);*/
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request
     */
    public function destroy(Request $request)
    {
        /* Check User Type */
        if(auth()->user()->type == '1')
            $user_route = 'admin.login';
        elseif(auth()->user()->type == '2')
            $user_route = 'login';
        else
            return response()->view('errors.' . '404', [], 404);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route($user_route);
    }
}
