<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
           'email' => $request->email,
        ]);
        // Upload Image
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('Profile Updated', 'Success');

        return back();
    }
}
