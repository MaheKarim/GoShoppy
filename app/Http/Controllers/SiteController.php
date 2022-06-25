<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function show()
    {
        $faqs = FAQ::all();

        return view('frontend.faq', compact('faqs'));
    }

}
