@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
    <div class="main-content">
         <div class="container-fluid">
           <div class="row">
               <h3 class="page-title" style="padding-left:15px;">News</h3>
                 
                 
               <div class="col-md-12" id="edit">
                    <div class="panel panel-headline">
                         <center><h3 class="btn btn-primary text-white"  data-toggle="modal" data-target="#myModal1" style="font-weight:700;margin:50px auto 50px auto;">Add News <i class="fa fa-edit"></i></h3><center>        
                    <!-- News List  -->
                         <div class="row" style="padding:0 40px 0 40px;"> 
                             @foreach($data as $news)
                          <div class="col-lg-3" style="border-radius:10px;"> 
                               <!-- PANEL HEADLINE -->
                             <div class="panel panel-headline" style="min-height:310px;padding:10px;background-color:#F5F5FA;">
                                 <image src="{{asset('image/news/'.$news->image)}}" style="width:100%;">
                                   
                                   <h5>{{$news->body}}</h5>
                                   <center><a href="/admins/news/{{$news->id}}/edit"><button class="btn btn-outline-secondary float-right" style="background-color:white;"><i class="fa fa-edit text-danger"></i> EDIT</button></a></center>
                                   
                             </div>

                                 <!-- END PANEL HEADLINE -->
                          </div>

                             <!-- end news list -->
                              @endforeach
                         </div>
                    
                    </div> 
               </div>

               <modal class="modal" id="myModal1">
                    <div class="modal-dialog">
                         <div class="modal-content">
                            <div class="modal-header">
                                 <h3 class="modal-title text-center" style="font-weight:800;color:black;">Add News  <i class="fa fa-edit text-warning"></i></h3>
                            </div>
                            <div class="row">
                              <div class="col-md-12" id="edit">
                                   <div class="panel-headline">
                                         @if($message=Session::get('message'))
                                             <div class="alert alert-success alert-block">
                                                  <button type="button" class="close" data-dismiss="alert">x</button>
                                                  <strong>{{$message}}</strong>
                                             </div>
                                        @endif
                                             <form action="/admins/news" method="post" enctype="multipart/form-data" >
                                             @csrf
                                             <div class="panel-body">
                                                  <p style="font-weight:700">Select Image</p>
                                                  <input type='file' value="{{old('image')}}" name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey" required>
                                                  @error('image')
                                                  <p style="color:red">{{$errors->first("image")}}</p>
                                                  @enderror
                                                  <p  style="font-weight:700;padding-top:10px;">Add Discription</p>
                                                  <textarea type="textarea"  name="body"  class="form-control"  style="height:200px;width:100%" placeholder="Please type..." required> {{old('body')}}</textarea>
                                                  @error('body')
                                                  <p style="color:red">{{$errors->first("body")}}</p>
                                                  @enderror
                                                  <center><button class="btn btn-outline-secondary float-right btn-primary" style="margin-top:20px;margin-bottom:20px;">Save <i class="fa fa-bookmark"></i></button></center>
                                             </div>
                                             </form>
                                   </div> 
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                         </div>
                    </div>
               </modal>


         
          </div>
      </div>
</div> 
<!-- END MAIN CONTENT -->
@endsection