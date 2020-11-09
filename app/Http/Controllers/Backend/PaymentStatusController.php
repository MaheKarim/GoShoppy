<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PayNow;
use Illuminate\Http\Request;

class PaymentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = PayNow::all();

        return view('backend.payment-status.index', compact('payments'));
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
     * @param  \App\Models\PayNow  $payNow
     * @return \Illuminate\Http\Response
     */
    public function show(PayNow $payNow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayNow  $payNow
     * @return \Illuminate\Http\Response
     */
    public function edit(PayNow $payNow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayNow  $payNow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayNow $payNow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayNow  $payNow
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayNow $payNow)
    {
        //
    }
}
