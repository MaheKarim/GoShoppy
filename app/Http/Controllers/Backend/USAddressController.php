<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\USAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;

class USAddressController extends Controller
{

    public function index()
    {
        $usaddresses = USAddress::all();
        return view('backend.us-address.index', compact('usaddresses'));
    }


    public function edit(USAddress $uSAddress, $id)
    {
        $usaddresses = USAddress::findOrFail($id);
        return view('backend.us-address.form', compact('usaddresses'));
    }


    public function update(Request $request, USAddress $uSAddress)
    {
        USAddress::findOrfail($request->house_number_id)->update([
            'house_number' => $request-> house_number,
            'street_number' => $request-> street_number,
            'state_name' => $request-> state_name,
            'postal_code' => $request-> postal_code,
            'telephone_number' => $request-> telephone_number,
        ]);
        notify()->success("US Address Updated Successfully","Success");
        return redirect()->route('app.us-address.index');
    }

}
