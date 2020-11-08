<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourierType;
use Illuminate\Http\Request;

class CourierTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couriers = CourierType::all();
        return view('backend.courier-types.index', compact('couriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.courier-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'courier_type_name' => 'required|min:3|max:255|unique:courier_types'
        ]);
        $couriers = new CourierType;
        $couriers->courier_type_name = $request->courier_type_name;
        $couriers->save();

        notify()->success("Courier Type Created Successfully","Success");
        return redirect()->route('app.courier-types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourierType  $courierType
     * @return \Illuminate\Http\Response
     */
    public function show(CourierType $courierType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourierType  $courierType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $couriers = CourierType::findOrFail($id);

        return view('backend.courier-types.update', compact('couriers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourierType  $courierType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourierType $courierType)
    {
        $this->validate($request, [
            'courier_type_name' => 'required|min:3|max:255|unique:courier_types'
        ]);
        CourierType::findOrFail($request->courier_id)->update([
            'courier_type_name' => $request->courier_type_name
        ]);
        notify()->success("Courier Type Updated Successfully","Success");
        return redirect()->route('app.courier-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourierType  $courierType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourierType $courierType)
    {
        $courierType->delete();
        notify()->warning('Courier Type Deleted','Successfully');
        return back();
    }
}
