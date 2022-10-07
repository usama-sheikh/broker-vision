<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index()
    {
        return view('user.Settings.index');
    }

    /**
     * Update Profile
     *
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email,'.auth()->user()->id,
            'profile' => 'image|mimes:jpeg,png,gif,svg',
        ]);

        $filename = auth()->user()->picture ?? null;
        if ($profile = $request->file('profile')) {
            // Define upload path
            $destinationPath = public_path('/assets/profile'); // upload path
            // Upload Original Image
            $filename = date('YmdHis') . "." . $profile->getClientOriginalExtension();

            if (auth()->user()->picture != Null) {
                $usersImage = public_path("/assets/profile/" . auth()->user()->picture); // get previous profile from folder
                if (file_exists($usersImage)) { // unlink or remove previous profile from folder
                    unlink($usersImage);
                }
            }
            $profile->move($destinationPath, $filename);
        }

        $requestData['name'] = $request->name;
        $requestData['phone'] = $request->phone;
        $requestData['email'] = $request->email;
        $requestData['picture'] = $filename;

        $userProfile = auth()->user()->update($requestData);
        if ($userProfile) {
            return back()->with('success', 'Your profile is updated successfully');
        } else {
            return back()->with('error', 'Something went wrong, Try again latter');
        }
    }

    /**
     * Change Password
     *
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with("error","Your current password does not matches with the password.")->withInput();
        }

        // Change Password
        $requestData['password'] = bcrypt($request->get('password'));;
        $userProfile = auth()->user()->update($requestData);

        if ($userProfile) {
            return back()->with('success', 'Your password is updated successfully');
        } else {
            return back()->with('error', 'Something went wrong, Try again latter')->withInput();
        }
    }

}
