<?php

namespace App\Http\Controllers;
use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   function subcription( Request $request)
   {
       request()->validate([
           'email'=>"required",
       ]);
      $date=date('Y:m:d');
       $subcription = new home();
       $subcription->date=$date;
       $subcription->email=request('email');
       $subcription->verified="not-verified";
       $subcription->save();
       return redirect("/");
   }
}
