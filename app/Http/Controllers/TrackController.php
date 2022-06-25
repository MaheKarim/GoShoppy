<?php

namespace App\Http\Controllers;

use App\Models\ShipForMe;
use Illuminate\Http\Request;

class TrackController extends Controller
{

    public function index()
    {
        return view('frontend.order-track.track-order');
    }

    public function search(Request $request)
    {
         $order = ShipForMe::where('track_id', $request->track_id)->first();

         return view('frontend.order-track.track-order-result', compact('order'));
    }

}
