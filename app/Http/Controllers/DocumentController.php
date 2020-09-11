<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $files=Document::latest()->get();
        return view('admins.document',['data'=>$files]);
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
        $files=$request->file->getClientOriginalName();
        $request->file->storeas('image',$files,'public');
        $file= new Document();
        $file->file=$files;
        $file->title=request('title');
        $file->body=request('body');
        $file->save();
        return redirect('/admins/document');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $files= Document::find($id);
        return view('admins.documentedit',['data'=>$files]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $files=$request->file->getClientOriginalName();
        $request->file->storeas('image',$files,'public');
        $file= Document::find($id);
        $file->file=$files;
        $file->title=request('title');
        $file->body=request('body');
        $file->save();
        return redirect('/admins/document');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
