<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
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

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
