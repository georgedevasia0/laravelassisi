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
                    <div class="panel" style="min-height:450px;">
                       <div class="panel-heading">
                          <h3 class="panel-title">Folders</h3>
                       </div>
                       <div class="panel-body ">
                          <!-- start -->
                          <ul class="nav">
                             <!--  list folders in db -->
                             <li><a href="/admins/gallery/folder/{{$a2folder->id}}" class=""><span></span><i class="fa fa-folder-open"></i> A2 Winners</a></li>
                             <li><a href="/admins/gallery/folder/{{$b2folder->id}}" class=""><span></span><i class="fa fa-folder-open"></i> B2  Winners</a></li>
                             <li><a href="/admins/gallery/folder/{{$c2folder->id}}" class=""><span> </span><i class="fa fa-folder-open"></i> C2 Winners</a></li>
                             @foreach($data as $folder)
                             <li><a href="/admins/gallery/folder/{{$folder->id}}" ><span><i class="fa fa-folder-open"></i> {{$folder->folder}}</span></a></li>
                     <form action="/admins/gallery/folder/{{$folder->id}}" method="POST">
                     @csrf
                     @method('DELETE')
                      <button type="submit" class="btn btn-secondary" style="margin-left:15px;">Delete <i class="fa fa-trash text-danger"></i> </button>
                      </form>
                             @endforeach
        
                             <!-- end loop -->
                             <center><button onclick="popup()"  class="btn btn-primary"   style="margin-left:-35px;margin-top:15px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
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
                          <h3 class="panel-title">{{$folderdata->folder}}</h3>
                          <!-- FOLDER NAME -->
                       </div>
                       <div class="panel-body">
                    <!-- form start  -->
                           <div class="row">
                              <div class="col-md-12 badge-dark">
                                 <div class="item ">
                                    <div class="card item-card card-block">
                                       <center>
                                          <h4 class="btn btn-primary text-white"  data-toggle="modal" data-target="#myModal1" style="font-weight:700; border-radius:10px;margin-bottom:15px;">UPLOAD IMAGE <i class="fa fa-plus-circle"></i></h4>
                                          
                                          <br>
                                          
                                       </center>
                                    </div>
                                 </div>
                              </div>
                           </div>
        <!-- form end -->

        <div class="modal" id="myModal1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h3 class="modal-title text-dark" style="font-weight:800;">Upload Images</h3>
               </div>
               <div class="modal-body">

               <center>
                  @if($message=Session::get('message'))
                  <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                  </div>
                  @endif
                  <br>
                  <form action="/admins/gallery/folder/{{$folderdata->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                     <div class="form-group" style="margin-top:15px">
                        <input type="file"  name="image" value="{{old('image')}}" class="form-control-file">
                        @error('image')
                      <p class="alert alert-danger alert-block">{{$errors->first("image")}}</p>
                     @enderror
                        <br>
                        <div class="form-group">
                           <input type="text" value="{{old('body')}}"  name="body" class="form-control"  placeholder="Enter Name"> 
                           @error('body')
                      <p class="alert alert-danger alert-block">{{$errors->first("body")}}</p>
                     @enderror                             
                        </div>
                        <button class="btn btn-primary" style="margin:11px"><i class="fa fa-cloud-upload"></i> Upload</button>
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

        <!-- image display    -->
        <br>
        <modal class="modal" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                       <h3 class="modal-title text-center" style="font-weight:800;color:black;">Add Folder</h3>
                       <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="row">
                     <form action="/admins/gallery/folder" method="POST">
                       @csrf
                       <div class="col-lg-6" style="margin:20px 150px 0 150px !important;">
                           <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Enter folder name" name="folder">
                                  <button  class="btn btn-primary" style="margin:20px 100px 0 100px !important;">Create</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </modal>
        
        <div class="row">
        @foreach($galleries as $gallery)
           <!-- image card  -->
           <div class="col-md-3 mt-5" style="margin-bottom:15px">
              <div class="item" style="padding:20px;border-radius:5px;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);">
                 <div class="card item-card card-block">
                    <img class="card-img-top" src="{{asset('image/gallery/'.$gallery->image)}}" alt="Card image" style="width:100%;z-index:-10">
                    <div class="card-body">
                       <p class="card-title text-center bg-primary" style="z-index:1;">{{$gallery->body}}</p>
                       <form action="/admins/gallery/{{$gallery->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <center><button onclick="return confirm('Confirm Delete?');" class="btn btn-secondary stretched-link"><i class="fa fa-trash text-danger"></i> Delete</button></center>
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