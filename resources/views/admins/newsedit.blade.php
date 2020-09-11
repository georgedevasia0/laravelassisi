@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="row">
         <!-- News List  -->
          <div class="col-md-7" id="edit">
         <h3 class="page-title">Update News</h3>
            <div class="panel panel-headline">
                <center>
                   <h3>Edit News</h3>
                <center>
               <image src="{{asset('/storage/image/'.$news->image)}}" style="width:100%;height:300px">
               <form action="/admins/news/{{$news->id}}" method="POST" enctype="multipart/form-data" >
               @csrf
               @method('PUT')
               <div class="panel-body">
                  <p>Select Image</p>
                  <input type='file'  name="image" style="width:100%;margin-bottom:10px" class="form-control bg-grey" required>
                  <p>Add Discerption</p>
                  <textarea type="textarea"  name="body" style="height:200px;width:100%" required>{{$news->body}}</textarea>
                  <center><a href="news.php"><button class="btn btn-outline-secondary float-right btn-success">UPDATE</button></a></center>
               </div>
               </form>
            </div>

            
         </div>
         
</div>
@endsection
