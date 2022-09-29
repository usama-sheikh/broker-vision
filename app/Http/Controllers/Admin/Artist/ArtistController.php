<?php

namespace App\Http\Controllers\Admin\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.Artist.index');
    }

    /**
     * Add New Artist
     *
     */
    public function addNewArtist(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required',
            'origin' => 'required',
            'genre' => 'required',
            'members' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        $filename = null;
        if ($profile = $request->file('image')) {
            // Define upload path
            $destinationPath = public_path('/assets/artist'); // upload path
            // Upload Original Image
            $filename = date('YmdHis') . "." . $profile->getClientOriginalExtension();
            $profile->move($destinationPath, $filename);
        }

        $requestData = $request()->all();
        $requestData['user_id'] = auth()->user()->id;
        $requestData['type'] = 2; // 2=Manually

        $addArtist = auth()->user()->create($requestData);
        if ($addArtist) {
            return back()->with('success', 'Artist added successfully');
        } else {
            return back()->with('error', 'Something went wrong, Try again latter');
        }
    }
}
