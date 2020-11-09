<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipForMe;
use Illuminate\Http\Request;

class ShipOrderProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = ShipForMe::orderBy('created_at', 'desc')->get();

        return view('backend.shipForMe.shipforme_admin', compact('orders'));
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
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function show(ShipForMe $shipForMe, $id)
    {
        $order = ShipForMe::find($id);
        return view('backend.shipForMe.order_fullview', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipForMe $shipForMe, $id)
    {
        $orders = ShipForMe::find($id);

        return view('backend.shipForMe.update_shipforme', compact('orders'));
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
        ShipForMe::findOrfail($request->comment_id)->update([
            'comment' => $request->comment,
            'delivery_time' => $request->delivery_time,
            'status_id' => $request->status_id,
            'payble_money' => $request->payble_money,
        ]);
        notify()->success("Order Status Updated Successfully","Success");
        return redirect()->route('app.shipforme-orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipForMe  $shipForMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipForMe $shipForMe, $id)
    {
        $orders = ShipForMe::find($id);
        $orders->delete();

        notify()->error("Order Deleted Successfully","Delete");
        return back();
    }
}
