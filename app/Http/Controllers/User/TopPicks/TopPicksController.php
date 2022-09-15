<?php

namespace App\Http\Controllers\User\TopPicks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopPicksController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.TopPicks.index');
    }
}
