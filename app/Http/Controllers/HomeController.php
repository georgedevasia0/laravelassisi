<?php

namespace App\Http\Controllers;
use App\Home;
use App\News;
use App\Testimonialimage;
use App\Testimonialyoutube;
use App\gallery;
use App\folder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
    $news = News::latest()->skip(1)->take(4)->get();
    $new = News::latest()->take(1)->get();
    $data=Testimonialimage::all();
    $youtube=Testimonialyoutube::all();
    $galleryA2=gallery::where('folder','A2')->latest()->take(13)->get();
    $galleryB2=gallery::where('folder','B2')->latest()->take(13)->get();
    $galleryC2=gallery::where('folder','C2')->latest()->take(13)->get();
    $array=[
      'data'=>$news,
      'new'=>$new,
      'testimonial'=>$data,
      'youtube'=>$youtube,
      'galleryA2'=>$galleryA2,
      'galleryB2'=>$galleryB2,
      'galleryC2'=>$galleryC2,

    ];
    return view('users.home',$array);
   }
   public function gallery()
   {
         $folder= folder::all();
         return view('users.gallery',[ 'folder'=>$folder]);
   }
   public function album($id)
   {
      $folder= Folder::find($id);
      $folders=$folder->folder;
      $galleries=gallery::where(['folder'=>$folders])->latest()->get();  
      return view('users.album',['data'=>$galleries]);
   }

}
