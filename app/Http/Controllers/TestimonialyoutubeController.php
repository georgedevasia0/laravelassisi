<?php

namespace App\Http\Controllers;

use App\Testimonialyoutube;
use Illuminate\Http\Request;

class TestimonialyoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $link=Testimonialyoutube::all();
        return view('admins.testimonial.youtube',['data'=>$link]);
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
        //storing the youtube link to database from admin
        $link= new Testimonialyoutube();
        $link->youtubelink=request('youtubelink');
        $link->save();
        return redirect('/admins/testimonial/youtube');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonialyoutube $testimonialyoutube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonialyoutube  $testimonialyoutube
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $link=Testimonialyoutube::find($id);
        $link->delete();
        return redirect('/admins/testimonial/youtube');
    }
}
