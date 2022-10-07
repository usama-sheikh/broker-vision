<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        $admin = User::where('type',1)->first();
        $topPicks = Artist::where('user_id', $admin->id ?? '')->where('tracking',1)->paginate(10);
        return view('user.Dashboard.index', compact('topPicks'));
    }
}
