<?php

namespace App\Http\Controllers\Admin\Artist;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $artists = Artist::where('user_id',auth()->user()->id)->paginate('10');
        return view('admin.Artist.index', compact('artists'));
    }

    /**
     * Add New Artist
     *
     */
    public function addNewArtist(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'origin' => 'required',
            'genre' => 'required',
            'members' => 'required',
            'url' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,gif,svg',
        ]);

        $filename = null;
        if ($profile = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/assets/artist'); // upload path
            // Upload Original Image
            $filename = date('YmdHis') . "." . $profile->getClientOriginalExtension();
            $profile->move($destinationPath, $filename);
        }

        $requestData = $request->all();
        $requestData['user_id'] = auth()->user()->id;
        $requestData['image'] = $filename;

        $addArtist = Artist::create($requestData);
        if ($addArtist) {
            return back()->with('success', 'Artist added successfully');
        } else {
            return back()->with('error', 'Something went wrong, Try again latter');
        }
    }

    /**
     * Tracking Status
     *
     */
    public function trackingStatus(Request $request)
    {
        if(Artist::find($request->tracking_id)->update(['tracking' => $request->status])){
            $response['status']  = 200;
            $response['message'] = 'Artist tracking status is update successfully.';
        }else{
            $response['status']  = 201;
            $response['message'] = 'Unable to update artist tracking status.';
        }
        return response()->json($response);
    }
}
