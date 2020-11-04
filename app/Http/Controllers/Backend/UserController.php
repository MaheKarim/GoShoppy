<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.users.index');
        $users = User::all();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.users.create');

        $roles = Role::all();
        return view('backend.users.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.users.create');

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|confirmed|string|min:6',
            'avatar' => 'required|image',
            'deposit_balance' => 'required'
        ]);

        $user = User::create([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'state_name' => $request->state_name,
            'current_country' => $request->current_country,
            'deposit_balance' => $request->deposit_balance,
            'password' => Hash::make($request->password),
            'status' => $request->filled('status')
        ]);
        if($request->hasFile('avatar')){
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
            notify()->success('User Create', 'Success');
            return redirect()->route('app.users.index');
    }


    public function show(User $user)
    {
        Gate::authorize('app.users.index');

        return view('backend.users.show', compact('user'));

    }


    public function edit(User $user)
    {
        Gate::authorize('app.users.edit');

        $roles = Role::all();
        return view('backend.users.form', compact('roles', 'user'));
    }


    public function update(Request $request, User $user)
    {
        Gate::authorize('app.users.edit');

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users,email,'. $user->id,
            'role' => 'required',
            'password' => 'nullable|min:6|confirmed',
            'avatar' => 'nullable|image'
        ]);

        $user->update([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'state_name' => $request->state_name,
            'current_country' => $request->current_country,
            'deposit_balance' => $request->deposit_balance,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'status' => $request->filled('status'),
        ]);
        // upload images
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->avatar)->toMediaCollection('avatar');
        }
        notify()->success('User Successfully Updated.', 'Updated');
        return redirect()->route('app.users.index');
    }


    public function destroy(User $user)
    {
       Gate::authorize('app.users.destroy');
       $user->delete();

       notify()->success('User Deleted Successfully','Deleted');
       return back();
    }
}
