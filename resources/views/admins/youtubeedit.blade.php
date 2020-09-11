@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Youtube Gallery</h3>
      <div class="row">
         
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title">Folder 2</h3>
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">

               <!-- form start  -->
                  <div class="row">
                     <div class="col-md-12 badge-dark">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <center>
                                 <h4>ADD YOUTUBE VIDEO</h4>
                                 <br>
                                 <form action="/admins/youtube/{{$youtube->id}}" method="POST">
                                 @csrf
                                 @method('PUT')
                                    <div class="form-group" style="margin-top:15px">
                                       <input type="text" name="youtubelink" value="{{$youtube->youtubelink}}" class="form-control" placeholder="Enter the Youtube Link" required>
                                       <br>
                                  
                                       <div class="form-group">
                                          <label for="exampleFormControlInput1">Title</label>
                                          <input type="text" name="title" class="form-control" value="{{$youtube->title}}"  placeholder="Enter the title" required>
                                       </div>
                                       <button class="btn btn-success" style="margin:11px">update</button>
                                    </div>
                                 </form>
                              </center>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endsection
