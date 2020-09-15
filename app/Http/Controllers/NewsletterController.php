<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Response;
use PDF;

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
    public function update(Request $request, $id)
    {
        //updating the verified or not verified to database from admin
        $data=request('verified'); 
        Newsletter::where('id',$id)->update(['verified'=>$data]);
        return redirect('/admins/newslettersubscription');
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
               $user=Newsletter::where('verified',$filter1)->latest()->get();
            return view('admins.formupdate.newslettersubscription',['subcription'=>$user]);
        }
        if($filter1 =='verified' && $filter2 =='recent')
        {
            $user=Newsletter::where('verified',$filter1)->latest()->get();
            return view('admins.formupdate.newslettersubscription',['subcription'=>$user]);
        }
        if($filter1 =='not-verified' && $filter2 =='recent')
        {
            $user=Newsletter::where('verified',$filter1)->latest()->get();
            return view('admins.formupdate.newslettersubscription',['subcription'=>$user]);
        }
        if($filter1 =='null' && $filter2 =='recent')
        {
            $user=Newsletter::latest()->get();
            return view('admins.formupdate.newslettersubscription',['subcription'=>$user]);
        }

        
       
    }
    public function download(Request $request)
    {
        $from=request('from');
        $to=request('to');
        // $user= Newsletter::whereBetween('date',[$from,$to])->get();
        $user=Newsletter::all();
        view()->share('news',$user);
        $pdf = PDF::loadView('admins.formupdate.sample',$user);
        return $pdf->stream('newsletter.pdf');
    }
}
