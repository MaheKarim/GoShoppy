<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BuyForMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyForMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyorders = BuyForMe::where('user_id', Auth::id())->get();

        return view('user.buy-for-me.index', compact('buyorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('user.buy-for-me.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function show(BuyForMe $buyForMe)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyForMe $buyForMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyForMe $buyForMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyForMe $buyForMe)
    {
        //
    }

    public function test(Request $request)
    {
        return view('user.buy-for-me.show', compact('request'));
    }
}
