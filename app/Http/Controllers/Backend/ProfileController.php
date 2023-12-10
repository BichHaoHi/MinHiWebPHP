<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin.profile.index');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'address' => ['required', 'max:100'],
            'phone' => ['required', 'max:10']
        ]);

        $user = Auth::user();
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back();

    }
}
