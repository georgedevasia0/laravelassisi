<?php

namespace App\Http\Controllers;

use App\Registeration;
use Illuminate\Http\Request;
class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displaying the result to admin ,registeredstudent section
        $data = Registeration::latest()->get();
        return view('admins.formupdate.registeredstudent',['data'=>$data]);
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
        //storing the user input values to  database 
        $registered= new Registeration();
        $registered->name=request('name');
        $registered->phone=request('phone');
        $registered->email=request('email');
        $registered->age=request('age');
        $registered->address=request('address');
        $registered->qualification=request('qualification');
        $registered->branch=request('language');
        $registered->date=date('Y:m:d');
        $registered->contacted='not verified';
        $registered->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function show(Registeration $registeration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registeration $registeration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registeration $registeration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registeration $registeration)
    {
        //
    }
}
