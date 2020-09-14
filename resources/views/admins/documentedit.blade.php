@extends('layouts.adminlayouts')
@section('admincontents')
@section('news','active')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <div class="row">
          <h3 class="page-title">Document</h3>
          
           <div class="col-md-7" id="edit">
              <h3 class="page-title">Add Document </h3>
               <div class="panel panel-headline">
                  <form action="/admins/document/{{$data->id}}" method="POST" enctype="multipart/form-data" >
                      @csrf
                      @method("PUT")
                      <div class="panel-body">
                         <p>Select Document</p>
                         <input type='file' value="{{$data->file}}" name="file" style="width:100%;margin-bottom:10px" class="form-control bg-grey" >
                
                         <p>Title</p>
                         <input type="text" value="{{$data->title}}"  name="title" class="form-control"  placeholder="Enter the title">
                 
                           <p>Add Discerption</p>
                           <textarea type="textarea"  name="body" style="height:200px;width:100%" >{{$data->body}}</textarea>
                  
                           <center><button class="btn btn-outline-secondary float-right btn-success">Save</button></center>
                       </div>
                 </form>
             </div> 
         </div>
      </div>
    </div>
</div>
@endsection