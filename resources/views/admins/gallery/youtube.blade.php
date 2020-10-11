@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Youtube Gallery</h3>

      <div class="row">
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">

               <!-- form start  -->
                  <div class="row">
                     <div class="col-md-12 badge-dark">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <center>
                                 <h4 class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD YOUTUBE VIDEO <i class="fa fa-plus"></i></h4>
                              </center>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br><br>
            </div>
          
            <!-- END LABELS -->
         </div>
      </div>

      <div class="row">
         @foreach($data as $youtube)
            <!-- image card  -->
            <div class="col-md-4" style="margin-bottom:5px;">
               <div class="item" style="background-color:white;padding:5%;border-radius:10px;">
                  <div class="card item-card card-block">
                     <iframe class="card-img-top" src="{{$youtube->youtubelink}}" alt="Card image" style="width:100%;height:200px"></iframe>
                     <div class="card-body">
                        <p class="card-title">{{$youtube->title}}</p>

                        <div class="row">
                           <div class="col-lg-6">
                           <a href="/admins/youtube/{{$youtube->id}}/edit" class="btn btn-primary" style="margin:11px;border-radius:5px;width:90%;">Edit  <i class="fa fa-edit"></i></a>
                           </div>
                           <div class="col-lg-6 ">
                           <form action="/admins/youtube/{{$youtube->id}}" method="post">
                           @csrf
                           @method("DELETE")
                           <button onclick="return confirm('Are you sure');" style="margin:11px;border-radius:5px;width:90%;" class="btn btn-secondary stretched-link">Delete  <i class="fa fa-trash text-danger"></i></button>
                           </form>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>

</div>

<div class="modal" id="myModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title text-dark" style="font-weight:800;">Add Youtube Videos</h3>
         </div>
         <div class="modal-body">
            <center>
               <br>
               @if($message=Session::get('message'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{{$message}}</strong>
                
                </div>
                @endif
               <form action="youtube" method="POST">
               @csrf
                  <div class="form-group" style="margin-top:15px">
                     <input type="text" name="youtubelink" value="{{old('youtubelink')}}" class="form-control" placeholder="Enter the Youtube Link" required>
                     @error('youtubelink')
                     <p style="color:red">{{$errors->first("youtubelink")}}</p>
                     @enderror
                     <br>
                
                     <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{old('tite')}}" placeholder="Enter the title" required>
                        @error('title')
                        <p style="color:red">{{$errors->first("title")}}</p>
                        @enderror
                     </div>
                     <button class="btn btn-primary" style="margin:11px"><i class="fa fa-upload"></i> Upload</button>
                  </div>
               </form>
            </center>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- END MAIN CONTENT -->
@endsection