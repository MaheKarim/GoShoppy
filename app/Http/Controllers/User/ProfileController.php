<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword()
    {
        return view('user.password_update');
    }

    public function updatePassword(Request $request)
    {
       $this->validate($request, [
           'old_password' => 'required',
           'password' => 'required|confirmed',
       ]);
       $user = Auth::user();
       $hashedPassword = $user->password;
       if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user->update([
                   'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                return redirect()->route('login');
            } else {
                notify()->warning('New Password can not be as Old Password','Warning');
            }
       } else {
           notify()->error('Current Password did not Matched! ', 'Error');
       }
        return back();
    }
}
