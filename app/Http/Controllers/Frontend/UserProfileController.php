<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
    //
    public function index(){
        return view('frontend.dashboard.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'address' => ['required', 'max:100'],
            'phone' => ['required', 'max:10'],
            'postcode' => ['required', 'max:12'],
            'birthday' => ['required', 'max:100'],

        ]);


        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->postcode = $request->postcode;
        $user->birthday = $request->birthday;
        $user->save();
        return redirect()->back();

    }
    // public function updatePassword(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required', 'current_password'],
    //         'password' => ['required', 'confirmed', 'min:8']
    //     ]);
    //     $request->user()->update([
    //         'password' => bcrypt($request->password)
    //     ]);
    //     return redirect()->back();
    // }
}
