<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.Dashboard.index');
    }
}
