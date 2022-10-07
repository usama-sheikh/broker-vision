<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the page.
     *
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::where('id','!=',auth()->user()->id)->get();
        return view('admin.Users.index', compact('users'));
    }

    /**
     * Delete the User.
     *
     */
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id)->delete();
        if ($user) {
            $response['header']  = '<h4>Successfully!<h4>';
            $response['status']  = 'success';
            $response['message'] = 'User deleted successfully.';
        } else {
            $response['header']  = '<h4>Error!<h4>';
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete user.';
        }
        return response()->json($response);
    }
}
