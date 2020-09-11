<?php

namespace App\Http\Controllers;

use App\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $youtubes=Youtube::latest()->get();
        return view('admins.youtube',['youtubes'=>$youtubes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $youtubelink=request('youtubelink');
        request()->validate([
            'youtubelink'=>['required'],
            'title'=>'required',
            
        ]);
    
             $youtube=new youtube();
      $youtube->youtubelink=request('youtubelink');
      $youtube->title=request('title');
      $youtube->save();
      return redirect('/admins/youtube');
         
    
     
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function show(Youtube $youtube)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $youtube = Youtube::find($id);
        return view('admins.youtubeedit',['youtube'=>$youtube]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $youtube = Youtube::find($id);  
        $youtube->youtubelink=request('youtubelink');
        $youtube->title=request('title');
        $youtube->save(); 
        return redirect('/admins/youtube');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $youtube = Youtube::find($id);
       $youtube->delete();
       return redirect('/admins/youtube');
        }
}
