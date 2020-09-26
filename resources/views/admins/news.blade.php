@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
    <div class="main-content">
         <div class="container-fluid">
           <div class="row">
               <h3 class="page-title">News</h3>
                 <div class="col-md-12" id="edit">
                         <div class="panel panel-headline">
                           <center>
                      <h3>Edit News</h3>
                          <center>
                          @if($message=Session::get('message'))
                   <div class="alert alert-success alert-block">
                         <button type="button" class="close" data-dismiss="alert">x</button>
                              <strong>{{$message}}</strong>
                                  
                         </div>
                @endif
                           <form action="/admins/news" method="post" enctype="multipart/form-data" >
                              @csrf
                             <div class="panel-body">
                                <p>Select Image</p>
                                <input type='file' value="{{old('image')}}" name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey" >
                                @error('image')
                                <p style="color:red">{{$errors->first("image")}}</p>
                                @enderror
                                <p>Add Discerption</p>
                                <textarea type="textarea"  name="body" style="height:200px;width:100%" > {{old('body')}}</textarea>
                                @error('body')
                                <p style="color:red">{{$errors->first("body")}}</p>
                                @enderror
                                <center><button class="btn btn-outline-secondary float-right btn-success">Save</button></center>
                              </div>
                           </form>
                   </div> 
             </div>
         <!-- News List  -->
              <div class="row"> 
                   @foreach($data as $news)
                <div class="col-md-5"> 
                     <!-- PANEL HEADLINE -->
                   <div class="panel panel-headline">
                       <image src="{{asset('image/news/'.$news->image)}}" style="width:100%;height:300px">
                         <div class="panel-body">
                              <h4>{{$news->body}}</h4>
                              <center><a href="/admins/news/{{$news->id}}/edit"><button class="btn btn-outline-secondary btn-primary float-right">EDIT</button></a></center>
                              <form action="/admins/news/{{$news->id}}" method="post">
                                         @csrf
                                         @method("DELETE")
                                         <center><button onclick="return confirm('are you sure');" class="btn btn-danger stretched-link">Delete</button></center>
                                         </form>
                         </div>
                   </div>
            
                       <!-- END PANEL HEADLINE -->
                </div>
        
                   <!-- end news list -->
                    @endforeach
               </div>

          </div>
      </div>
</div> 
<!-- END MAIN CONTENT -->
@endsection