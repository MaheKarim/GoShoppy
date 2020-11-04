<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(  )
    {
        return view('user.profile_update');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'state_name' => $request->state_name,
            'current_country' => $request->current_country,
//           'email' => $request->email,

        ]);
        // Upload Image
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('Profile Updated', 'Success');

        return back();
    }
}
