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

    public function trackingProcess(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        config('constants.credit_report_url');
        $validDomainURL = parse_url($request->url);
        if($validDomainURL['host'] == 'vividseats.com'|| $validDomainURL['host'] == 'www.vividseats.com'){
            return redirect()->route('user.tracking.artist.index', ['id' => 1]);
        }else{
            return redirect()->back()->with('error', 'Invalid URL, URL must be of vividseats.com');
        }
    }
}
