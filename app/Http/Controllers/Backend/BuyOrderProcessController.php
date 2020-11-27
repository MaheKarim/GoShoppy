<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BuyForMe;
use Illuminate\Http\Request;

class BuyOrderProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bfmorders = BuyForMe::orderBy('created_at', 'desc')->get();

        return view('backend.buyForMe.allorder', compact('bfmorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function show(BuyForMe $buyForMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyForMe  $buyForMe
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyForMe $buyForMe, $id)
    {
        $bfmorders = BuyForMe::find($id);

        return view('backend.buyForMe.order_update', compact('bfmorders'));
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
    public function destroy(BuyForMe $buyForMe, $id)
    {
        $bfmorders = BuyForMe::find($id);
        $bfmorders->delete();

        notify()->error("Order Deleted Successfully","Delete");
        return back();
    }
}
