<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StatusController extends Controller
{

    public function index()
    {
        Gate::authorize('app.status.index');
        $statuses = Status::all();
        return view('backend.status.index', compact('statuses'));
    }

    public function create()
    {
       // Gate::authorize('app.status.create');
        return view('backend.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Gate::authorize('app.status.store');
        $statuses = new Status();
        $statuses->status = $request->status;
        $statuses->status_description = $request->status_description;
        $statuses->save();

        notify()->success("Status Created Successfully","Success");
        return redirect()->route('app.status.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.status.edit');
        $statuses = Status::findOrfail($id);
        return view('backend.status.form', compact('statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        Gate::authorize('app.status.update');
        Status::findOrfail($request->status_id)->update([
           'status' => $request->status,
           'status_description' => $request->status_description,
        ]);
        notify()->success("Status Updated Successfully","Success");
        return redirect()->route('app.status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        Gate::authorize('app.status.destroy');
        if ($status->deletable) {
            $status->delete();
            notify()->success("Status Deleted Successfully!","Success");
        } else {
            notify()->error("You can\t delete system Status","Error");
        } return back();
    }
}
