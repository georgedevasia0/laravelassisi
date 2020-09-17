<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\Exports\ContactExport;
use Excel;



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
    public function update(Request $request,$id)
    {
      $contact=request('contact');
      Contact::where('id',$id)->update(['contacted'=>$contact]);
      return redirect('/admins/contact');
    }
    public function filter( Request $request)
    {
        $search=request('search');
        $filter1=request('filter1');
        $filter2=request('filter2');
        if(!$search && $filter1 == 'null'&& $filter2 == 'null')
        {
            return redirect('/admins/contact');
        }
        if($search) 
        {
            if($filter1 == 'null'&& $filter2 == 'null')
            {
                $user=Contact::where('name','like',"%".$search."%")->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
            elseif($filter1 && !$filter2)
            {
                $user=Contact::where([['name','like',"%".$search."%"],['contacted','=',$filter1]])->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
            elseif($filter1 && $filter2)
            {
                $user=Contact::where([['name','like',"%".$search."%"],['contacted','=',$filter1]])->latest()->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
            elseif(!$filter1 && $filter2)
            {
                $user=Contact::where(['name','like',"%".$search."%"])->latest()->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
       
        }
        if(!$search)
        {
            if($filter1 && !$filter2)
            {
                $user=Contact::where(['contacted'=>$filter1])->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
            elseif($filter1 && $filter2)
            {
                $user=Contact::where(['contacted'=>$filter1])->latest()->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
            elseif(!$filter1 && $filter2)
            {
                $user=Contact::latest()->get();
                return view('admins.formupdate.contact',['data'=>$user]);
            }
        }
    }
    public function export(Request $request)
    {
        $from=strtotime(request('from'));
        $to=strtotime(request('to'));
        $export = new ContactExport($from,$to);
        return Excel::download($export,'newsletter.xlsx');
        
       
    }

}

