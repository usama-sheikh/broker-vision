<?php

namespace App\Http\Controllers\Admin\TopPicks;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class TopPicksController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $topPicks = Artist::where('user_id', auth()->user()->id)->paginate(10);
        /*->where('tracking',1)*/
        return view('admin.TopPicks.index', compact('topPicks'));
    }
}
