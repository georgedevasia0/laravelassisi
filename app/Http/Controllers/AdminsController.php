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
    function newslettersubscription()
    {
        $data = home::latest()->get();
        return view('admins.formupdate.newslettersubscription',['subcription'=>$data]);
    } 
}
