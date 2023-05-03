<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\GetQuoteForm;
use App\Models\USAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FrontendController extends Controller
{

    public function index()
    {
       $getquotes = GetQuoteForm::all();
       $getAddress = USAddress::all();

        return view('frontend.welcome', compact('getquotes', 'getAddress'));
    }


    public function store(Request $request){
        $getquotes = new GetQuoteForm;
        $getquotes->client_name = $request->client_name;
        $getquotes->client_contact= $request->client_contact;
        $getquotes->couriertype_id = $request->couriertype_id;
        $getquotes->save();

        notify()->success('Sent Successfully!','Quote');
        return back();
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
          Artisan::call('key:generate');
          Artisan::call('migrate:reset');
          Artisan::call('migrate');
          Artisan::call('storage:link');
          Artisan::call('db:seed');

        return 'Migrate Reset - Migrate - Storage:Link - DB Seed Done!';
    }

    public function homepage()
    {
        return view('new-frontend.index');
    }

}
