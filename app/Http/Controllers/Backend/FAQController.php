<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        return view('backend.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faqs.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'faq_ques' => 'required',
            'faq_ans' => 'required',
        ]);
        FAQ::create([
            'faq_ques' => $request->faq_ques,
            'faq_ans' => $request->faq_ans,
        ]);
        notify()->success("FAQ Added Successfully","Success");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('backend.faqs.edit_form', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ)
    {
        FAQ::findOrFail($request->faq_ques_id)->update([
           'faq_ques' => $request->faq_ques,
            'faq_ans' => $request->faq_ans,
        ]);
        notify()->success("FAQS Updated Successfully","Success");
        return redirect()->route('app.faq-system.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = FAQ::find($id)->delete();
        notify()->success("FAQS Deleted Successfully","Successfully");
        return back();
    }
}
