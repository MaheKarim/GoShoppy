<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShipForMe;
use App\Models\USAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ShipForMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipformes = ShipForMe::where('user_id', Auth::id())->get();
        return view('user.ship-for-me.showown_order', compact('shipformes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usaddresses = USAddress::find(1);
        return view('user.ship-for-me.create', compact('usaddresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'product_weight' => 'required',
            'product_quantity' => 'required|integer',
            'recvr_name' => 'required|string',
            'recvr_phn_number1' => 'required|max:15|min:8',
            'recvr_phn_number2' => 'string|max:15|min:8',
            'recvr_address' => 'required|string',
            'recvr_upazila' => 'required|string',
            'recvr_zila' => 'required|string',
        ]);

        $config = [
            'table' => 'ship_for_mes',
            'length' => 4,
            'prefix' => date('Ys')
        ];
        $trackID = IdGenerator::generate($config).date('HI').Auth::id();

        $shipformes = new ShipForMe();
        $shipformes->product_name = $request->product_name;
        $shipformes->product_link = $request->product_link;
        $shipformes->product_weight = $request->product_weight;
        $shipformes->product_quantity = $request->product_quantity;
        $shipformes->recvr_name = $request->recvr_name;
        $shipformes->recvr_phn_number1 = $request->recvr_phn_number1;
        $shipformes->recvr_phn_number2 = $request->recvr_phn_number2;
        $shipformes->recvr_mail = $request->recvr_mail;
        $shipformes->recvr_address = $request->recvr_address;
        $shipformes->recvr_upazila = $request->recvr_upazila;
        $shipformes->recvr_zila = $request->recvr_zila;
        $shipformes->user_id = Auth::id();
        $shipformes->status_id = 1;
        $shipformes->track_id = $trackID;
        $shipformes->save();

       //notify()->success('ShipForMe Order Created Successfully','Success');
        session()->flash('success','ShipForME Order Created Successfully!');

        return redirect()->route('user.dashboard.index')->with('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function show(ShipForMe $shipForMe, $id)
    {
      $shipForMe = ShipForMe::find($id);
      return view('user.ship-for-me.single_order', compact('shipForMe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipForMe $shipForMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipForMe $shipForMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipForMe $shipForMe)
    {
        //
    }
}
