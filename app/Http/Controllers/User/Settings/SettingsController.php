<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.Settings.index');
    }
}
