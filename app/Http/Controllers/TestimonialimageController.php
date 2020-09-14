<?php

namespace App\Http\Controllers;

use App\Testimonialimage;
use Illuminate\Http\Request;

class TestimonialimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Testimonialimage::all();
        return view('admins.testimonial.image',['data'=>$data]);
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
        //storing the testimonial image sectio to database from admin
        $image=$request->image->getClientOriginalName();
        $request->image->storeas('image',$image,'public');
        $data= new Testimonialimage();
        $data->name=request('name');
        $data->image=$image;
        $data->designation=request('designation');
        $data->body=request('body');
        $data->save();
        return redirect('/admins/testimonial/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonialimage $testimonialimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonialimage  $testimonialimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting the testimonial image section
        $data= Testimonialimage::find($id);
        $data->delete();
        return redirect('/admins/testimonial/gallery');
    }
}
