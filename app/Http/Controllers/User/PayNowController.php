<?php

namespace App\Http\Controllers\User;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\PayNow;
use App\Models\ShipForMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayNowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function index()
    {
        $payments = PayNow::where('user_id', Auth::id())->get();

        return view('user.pay-now.show', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function create()
    {
        $trackIds = ShipForMe::where('user_id', Auth::id())->get();

        return view('user.pay-now.create', compact('trackIds'));
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
        $payments->fill($request->all());
        $payments->user_id = Auth::id();
        $payments->status_id = OrderStatus::PENDING;
        $payments->save();

        notify()->success('Payment Option Sent. Check Status After Few Minutes','Successfully');

        return redirect()->route('user.pay-now.index');
    }


}
