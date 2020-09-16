@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Gallery</h3>
      <div class="row">
         <div class="col-md-3">
            <!-- FOLDERS -->
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title">Folders</h3>
               </div>
               <div class="panel-body ">
                  <!-- start -->
                  <ul class="nav">
                     <!--  list folders in db -->
                     @foreach($data as $folder)
                     <li><a href="/admins/gallery/folder/{{$folder->id}}" class=""><span>{{$folder->folder}}</span></a></li>
                     @endforeach

                     <!-- end loop -->
                     <center><button onclick="popup()"  class="btn btn-primary "  onclick=" "data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
                  </ul>
                  <!-- end -->
               </div>
            </div>
            <!-- END FOLDERS -->
            <!-- END INPUT SIZING -->
         </div>
         <div class="col-md-9">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">
<!-- image display    -->
<br>
<div class="popup" id="popup-1">
               <form action="/admins/gallery/folder" method="POST">
                  @csrf
                  <input type="text" name="folder">
                  <button  class="btn btn-success">Create</button>
              </form>
           </div>

<div class="row">
@foreach($galleries as $gallery)
   <!-- image card  -->
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="{{asset('image/gallery/'.$gallery->image)}}" alt="Card image" style="width:100%;height:150px">
            <h4>{{$gallery->folder}}</h4>
            <div class="card-body">
               <p class="card-title">{{$gallery->body}}</p>
               <form action="/admins/gallery/{{$gallery->id}}" method="post">
                                 @csrf
                                 @method("DELETE")
                                 <center><button onclick="return confirm('are you sure');" class="btn btn-danger stretched-link">Delete</button></center>
                                 </form>
            </div>
         </div>
      </div>
   </div>
<!-- END MAIN CONTENT -->  
@endforeach
</div>
<!-- end -->
@endsection