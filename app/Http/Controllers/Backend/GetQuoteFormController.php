<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GetQuoteForm;
use Illuminate\Http\Request;

class GetQuoteFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getquotes = GetQuoteForm::all();
        return view('backend.client-quote', compact('getquotes'));


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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GetQuoteForm  $getQuoteForm
     * @return \Illuminate\Http\Response
     */
    public function show(GetQuoteForm $getQuoteForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GetQuoteForm  $getQuoteForm
     * @return \Illuminate\Http\Response
     */
    public function edit(GetQuoteForm $getQuoteForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GetQuoteForm  $getQuoteForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetQuoteForm $getQuoteForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GetQuoteForm  $getQuoteForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetQuoteForm $getQuoteForm, $id)
    {
        $getquotes = GetQuoteForm::findOrFail($id);
        $getquotes->delete();

        notify()->warning('Client Quote Deleted', 'Successfully');
        return back();
    }
}
