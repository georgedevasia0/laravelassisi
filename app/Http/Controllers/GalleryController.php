<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=gallery::latest()->get();
        return view('admins.gallery',['galleries'=>$galleries]);
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
        request()->validate([
            'image'=>['required','mimes:jpeg,bmp,png'],
            'body'=>'required',
            
        ]);
        $image=$request->image->getClientOriginalName();
        $request->image->storeas('image',$image,'public');
        $gallery=new gallery();
        $gallery->image=$image;
        $gallery->folder='name';
        $gallery->body=request('body');
        $gallery->save();
        return redirect('/admins/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = gallery::find($id);
        $gallery->delete();
        return redirect('/admins/gallery');
    }
}
