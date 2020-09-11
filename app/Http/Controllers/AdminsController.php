<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\contact;
use App\Registeration;

class AdminsController extends Controller
{
    function index()
    {
   return view('admins.dashboard');
    }
    function contact()
    {
        $data = contact::latest()->get();
        return view('admins.contact',['data'=>$data]);
    }

    function newslettersubscription()
    {
        $data = home::latest()->get();
        return view('admins.newslettersubscription',['subcription'=>$data]);
    } 
    function profile()
    {
        return view('admins.profile');
    }  
    function registeredstudent()
    {
        $data = Registeration::latest()->get();
        return view('admins.registeredstudent',['data'=>$data]);
    }  
}
