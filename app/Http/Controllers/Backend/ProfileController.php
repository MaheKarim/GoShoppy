<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.form');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
           // 'email' => 'required|string|email|max:255|unique:users',
            'avatar' => 'nullable|image'
        ]);

        $user = Auth::user();
        $user->update([
           'name' => $request->name,
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
        return view('backend.profile.password_page');
    }

    public function updatePassword(Request $request)
    {
        // Validation Rules
        $this->validate($request,[
           'old_password' => 'required',
           'password' => 'required|confirmed',
        ]);
        $user = Auth::user();
        $hashedPassword = $user->password;
        if (Hash::check($request->old_password, Auth::user()->password)){
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
