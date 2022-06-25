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

    public function index()
    {
        $payments = PayNow::where('user_id', Auth::id())->get();

        return view('user.pay-now.show', compact('payments'));
    }


    public function create()
    {
        $trackIds = ShipForMe::where('user_id', Auth::id())->get();

        return view('user.pay-now.create', compact('trackIds'));
    }


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
