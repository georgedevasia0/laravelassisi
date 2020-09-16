<?php

namespace App\Http\Controllers;
use App\Home;
use App\News;
use App\Testimonialimage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
    $news = News::latest()->skip(1)->take(5)->get();
    $new = News::latest()->take(1)->get();
    $data=Testimonialimage::all();
    return view('users.home',['data'=>$news,'new'=>$new,'testimonial'=>$data]);
   }
}
