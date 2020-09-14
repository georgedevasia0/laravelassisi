<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Newsletter::latest()->get();
        return view('admins.formupdate.newslettersubscription',['subcription'=>$data]);
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
        //
        request()->validate([
            'email'=>"required",
        ]);
       $date=date('Y:m:d');
        $subcription = new Newsletter();
        $subcription->date=$date;
        $subcription->email=request('email');
        $subcription->verified="null";
        $subcription->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
        echo"reached";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
    public function filter(Request $request)
    {
        $filter1=request('filter1');
        $filter2=request('filter2');
        if($filter1 =='null' && $filter2 =="null")
        {
            return redirect('/admins/newslettersubscription');
        }
        if($filter1 =='verified' && $filter2 =="null")
        {
            echo "verified";
        }
        if($filter1 =='not-verified' && $filter2 =='null')
        {
             echo "not verified";
        }
        if($filter1 =='verified' && $filter2 =='recent')
        {
            echo"verified recent";
        }
        if($filter1 =='not-verified' && $filter2 =='recent')
        {
            echo"not verified recent";
        }
        
       
    }
}
