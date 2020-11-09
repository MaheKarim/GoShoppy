<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PayNow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayNowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = PayNow::where('user_id', Auth::id())->get();

        return view('user.pay-now.show', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.pay-now.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payments = new PayNow ;
        $payments->payment_trackID = $request->payment_trackID;
        $payments->payment_name_id = $request->payment_name_id;
        $payments->payment_sender_acc = $request->payment_sender_acc;
        $payments->payment_sender_traxid = $request->payment_sender_traxid;
        $payments->payment_sender_money = $request->payment_sender_money;
        $payments->user_id = Auth::id();
        $payments->status_id = 1;
        $payments->save();

        notify()->success('Payment Option Sent. Check Status After Few Minutes','Successfully');

        return redirect()->route('user.pay-now.index');
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
