<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index()
    {
        //printing the values to admin, contact registeration
        $data = contact::latest()->get();
        return view('admins.formupdate.contact',['data'=>$data]);
    }
    public function store(Request $request)
    {
        //storing value to database from input contact page 
          $contacted = new contact();
          $contacted->name=request('name');
          $contacted->email=request('email');
          $contacted->message=request('message');
          $contacted->date=date('Y:m:d');
          $contacted->contacted='not-contacted';
        //   $contacted->phone=request('phone');
          $contacted->save();
          return redirect('/contact');
    }
}

