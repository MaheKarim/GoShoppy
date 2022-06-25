<?php

namespace App\Http\Controllers\User;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShipForMeRequest;
use App\Models\ShipForMe;
use App\Models\USAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ShipForMeController extends Controller
{

    public function index()
    {
        $shipformes = ShipForMe::where('user_id', Auth::id())->get();
        return view('user.ship-for-me.showown_order', compact('shipformes'));
    }


    public function create()
    {
        $usaddresses = USAddress::find(1);
        return view('user.ship-for-me.create', compact('usaddresses'));
    }


    public function store(ShipForMeRequest $request)
    {
        $config = [
            'table' => 'ship_for_mes',
            'length' => 4,
            'prefix' => date('Ys')
        ];
        $trackID = IdGenerator::generate($config).Auth::id().date('HI');

        $shipformes = new ShipForMe();
        $shipformes->fill($request->all());
        $shipformes->user_id = Auth::id();
        $shipformes->status_id = OrderStatus::PENDING;
        $shipformes->track_id = $trackID;
        $shipformes->save();

        session()->flash('success','ShipForME Order Created Successfully!');

        return redirect()->route('user.dashboard.index')->with('');
    }


    public function show(ShipForMe $shipForMe, $id)
    {
      $shipForMe = ShipForMe::find($id);
      return view('user.ship-for-me.single_order', compact('shipForMe'));
    }


}
