<?php

namespace App\Http\Controllers;

use App\Models\PaymentService;
use Illuminate\Http\Request;

class PaymentServiceController extends Controller
{

    public function index()
    {
        $payments = PaymentService::all();

        return view('backend.payment-service.index', compact('payments'));
    }

    public function create()
    {
        return view('backend.payment-service.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'pay_service_name' => 'required|string|min:4',
           'pay_service_account' => 'required|string|min:4',
           'pay_service_type' => 'required|string|min:4',
        ]);
        $payments = new PaymentService();
        $payments->pay_service_name = $request->pay_service_name;
        $payments->pay_service_account = $request->pay_service_account;
        $payments->pay_service_type = $request->pay_service_type;
        $payments->save();

        notify()->success('Pay Service Created', 'Successfully');

        return redirect()->route('app.payment-service.index');
    }


    public function edit($id)
    {
        $payments = PaymentService::findOrFail($id);

        return view('backend.payment-service.edit', compact('payments'));
    }

    public function update(Request $request, PaymentService $paymentService)
    {
        $this->validate($request,[
           'pay_service_name' => 'required|string|min:4',
           'pay_service_account' => 'required|string|min:4',
           'pay_service_type' => 'required',
        ]);
        $paymentService->update([
           'pay_service_name' => $request->pay_service_name,
           'pay_service_account' => $request->pay_service_account,
           'pay_service_type' => $request->pay_service_type,
        ]);
        notify()->success('Update Payment Name & Service','Success');
        return redirect()->route('app.payment-service.index');
    }


    public function destroy($id)
    {
        $payments = PaymentService::findOrFail($id);
        $payments->delete();

        notify()->warning('Payment Service Deleted', 'Deleted');
        return back();
    }
}
