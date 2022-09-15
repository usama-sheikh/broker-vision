<?php

namespace App\Http\Controllers\Admin\TopPicks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopPicksController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.TopPicks.index');
    }
}
