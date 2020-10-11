@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <div class="row">
         <!-- News List  -->
            <div class="col-md-12" id="edit">
                  <h3 class="page-title">Update News</h3>
                  <div class="panel panel-headline" style="border-radius:10px;">
                     <center>
                     <h3 style="font-weight:700;">Edit News <i class="fa fa-edit text-warning"></i></h3>
                     <center>
                     <form action="/admins/news/{{$news->id}}" method="POST" enctype="multipart/form-data" >
                     @csrf
                     @method('PUT')
                     <div class="panel-body">
                        <h5 style="text-align:left;font-size:16px;font-weight:700;">Select Image</h5>
                        <input type='file'  name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey" required>
                        @error('image')
                        <p class="alert alert-danger alert-bock">{{$errors->first('image')}}</p>
                        @enderror
                        <h5 style="text-align:left;font-size:16px;font-weight:700;padding-top:10px;">Add Discription</h5>
                        <textarea type="textarea"  name="body" style="height:200px;width:100%;box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);padding:10px;border:1px solid #eaeaea;" required>{{$news->body}}</textarea>
                        @error('body')
                        <p class="alert alert-danger alert-bock">{{$errors->first('body')}}</p>
                        @enderror
                        <center><a href="news.php"><button style="margin-top:30px;" class="btn btn-outline-secondary float-right btn-primary">Update <i class="fa fa-upload"></i></button></a></center>
                     </div>
                     </form>
                  </div>
               </div>
      </div>
   </div>
</div>       
</div>
@endsection
