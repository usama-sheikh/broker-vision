<?php

namespace App\Http\Controllers\User\TopPicks;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;

class TopPicksController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        $admin = User::where('type',1)->first();
        $topPicks = Artist::where('user_id', $admin->id ?? '')->paginate(10);
        /*->where('tracking',1)*/
        return view('user.TopPicks.index', compact('topPicks'));
    }
}
