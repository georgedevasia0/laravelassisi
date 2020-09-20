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
        return view('admins.gallery.youtube',['data'=>$youtubes]);
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
        request()->validate([
            'youtubelink'=>'required',
            'title'=>'required',
            
        ]);
        		
      
      $url=request('youtubelink');
      $url_parse= parse_url($url);
      $valid=preg_match("^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$^", $url);
      if($valid==1)
      {
        $youtube=new youtube();
    
        $youtube->youtubelink=request('youtubelink');
  
        $youtube->title=request('title');
        $youtube->save();
        $replace=preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$valid);
        return back()->with('message','uploaded successfully');
      }
      
      else {
        return back()->with('message','youtube link is not found');
        
      }
      
    
        
         
    
     
 
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
        return view('admins.gallery.youtubeedit',['data'=>$youtube]);
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
        request()->validate([
            'youtubelink'=>'required',
            'title'=>'required',
            
        ]);
        $youtube = Youtube::find($id);  
        $youtube->youtubelink=request('youtubelink');
        $youtube->title=request('title');
        $youtube->save(); 
        return redirect('/admins/youtube')->with('message','updated');

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
