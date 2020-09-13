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
                     <li><a href="gallery.php" class=""><span>Folder 3</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder </span></a></li>
                     <li><a href="gallery.php" class=""> <span>Folder 1</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder 1</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder 1</span></a></li>
                     <!-- end loop -->
                     <center><button  class="btn btn-primary "  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
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
               <h4>UPLOAD IMAGE</h4>
               <br>
               <form action="/admins/gallery" method="POST" enctype="multipart/form-data">
               @csrf
                  <div class="form-group" style="margin-top:15px">
                     <input type="file"  name="image" value="{{old('image')}}" class="form-control-file">
                     @error('image')
                   <p style="color:red">{{$errors->first("image")}}</p>
                  @enderror
                     <br>
                     <div class="form-group">
                        <label for="exampleFormControlInput1" >Title</label>
                        <input type="text" value="{{old('body')}}"  name="body" class="form-control"  placeholder="Enter the title">
                        @error('body')
                        <p style="color:red">{{$errors->first("body")}}</p>
                       @enderror
                     </div>
                     <button class="btn btn-success" style="margin:11px">Upload</button>
                  </div>
               </form>
            </center>
         </div>
      </div>
   </div>
</div>
<hr>
<!-- form end -->
<!-- image display    -->
<br>

<div class="row">
@foreach($galleries as $gallery)
   <!-- image card  -->
   <div class="col-md-4" style="margin-bottom:5px">
      <div class="item ">
         <div class="card item-card card-block">
            <img class="card-img-top" src="{{asset('/storage/image/'.$gallery->image)}}" alt="Card image" style="width:100%;height:150px">
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