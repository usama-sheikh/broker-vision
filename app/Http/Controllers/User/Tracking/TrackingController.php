<?php

namespace App\Http\Controllers\User\Tracking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.Tracking.index');
    }

    /**
     * Show the page.
     *
     */
    public function trackingArtist($id)
    {
        return view('user.Tracking.tracking-artist');
    }
}
