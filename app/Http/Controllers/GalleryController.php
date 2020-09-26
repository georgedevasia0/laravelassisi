<?php

namespace App\Http\Controllers;

use App\gallery;
use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Redirect;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //createdefault()
        $folder=Folder::all()->skip(3);
        $a2folder=Folder::where('folder','A2')->first();
        $b2folder=Folder::where('folder','B2')->first();
        $c2folder=Folder::where('folder','C2')->first();

        return view('admins.gallery.gallery',['a2folder'=>$a2folder,'b2folder'=>$b2folder,'c2folder'=>$c2folder,'data'=>$folder]);
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
    public function store(Request $request,$id)
    {
        $gallery=new gallery();
        $folder=folder::find($id);
        if($request->hasfile('image'))
        {
            if($folder->folder=='A2'|| $folder->folder=='B2'||$folder->folder=='C2')
            {  
                request()->validate([
                'image'=>'required|mimes:jpeg,bmp,png|dimensions:ratio=1',
                'body'=>'max:200', 
            ]);
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension(); //getting image extension
                $filename=time().'.'.$extension;
                $file->move('image/gallery/',$filename);
                $gallery->image=$filename;
                $gallery->folder=$folder->folder;
                folder::where('folder',$folder->folder)->update(['image'=>$filename]);
                $gallery->body=request('body');
                $gallery->save();
                return redirect()->back()->with('message','Image Added');
            }
            else
            {
                request()->validate([
                    'image'=>['required','mimes:jpeg,bmp,png'],
                    'body'=>'max:200', 
                ]);
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension(); //getting image extension
                $filename=time().'.'.$extension;
                $file->move('image/gallery/',$filename);
                $gallery->image=$filename;
                $gallery->folder=$folder->folder;
                folder::where('folder',$folder->folder)->update(['image'=>$filename]);
                $gallery->body=request('body');
                $gallery->save();
                return redirect()->back()->with('message','Image Added');
            }
           
            
        }
    
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
        $gallery =Gallery::find($id);
        $image=$gallery->image;
        $path='image/gallery/'.$image;
        File::delete(public_path($path));
        $gallery->delete();
        return redirect()->back()->with('message','image deleted');
    }
}
