<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\GetQuoteForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       $getquotes = GetQuoteForm::all();
      //  dd($getquotes);
        return view('frontend.welcome', compact('getquotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $getquotes = new GetQuoteForm;
        $getquotes->client_name = $request->client_name;
        $getquotes->client_contact= $request->client_contact;
        $getquotes->couriertype_id = $request->couriertype_id;
        $getquotes->save();

        notify()->success('Sent Successfully!','Quote');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function optimize() {
        Artisan::call('optimize:clear');

        return 'Optimize Clear';
    }

    public function clear() {
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');

        return 'Route - View - Config - Cache Clear';
    }

    public function install() {
          Artisan::call('migrate:reset');
          Artisan::call('migrate');
          Artisan::call('storage:link');
          Artisan::call('db:seed');

        return 'Migrate Reset - Migrate - Storage:Link - DB Seed Done!';
    }

}
