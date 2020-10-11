@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Testimonial Gallery</h3>
      <div class="row">
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
               </div>
               <div class="panel-body">


               <div class="row">
                  <div class="col-md-12 badge-dark">
                     <div class="item ">
                        <div class="card item-card card-block">
                           <center>
                              <button style="font-weight:700;border-radius:10px;" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal">Upload Image <i class="fa fa-upload"></i></button>
                           </center>
                        </div>
                     </div>
                  </div>
               </div>
               


                  <modal class="modal" id="myModal">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                                <h3 class="modal-title text-center" style="font-weight:800;color:#37474F;">Upload Testimonial Image</h3>
                           </div>
                              <!-- form start  -->
                              <div class="row">
                                 <div class="col-md-12 badge-dark">
                                    <div class="item">
                                       <div class="card item-card card-block">
                                          
                                             <br>
                                             @if($message=Session::get('message'))
                                                 <div class="alert alert-success alert-block">
                                                       <button type="button" class="close" data-dismiss="alert">x</button>
                                                            <strong>{{$message}}</strong>

                                                       </div>
                                              @endif
                                             <form  style="padding: 0 50px;" action="/admins/testimonial/gallery" method="POST" enctype="multipart/form-data">
                                             @csrf
                                                <div class="form-group" style="margin-top:15px">
                                                   <input type="file"  name="image" value="{{old('image')}}" class="form-control" required>
                                                   @error('image')
                                                 <p class="alert alert-danger alert-block">{{$errors->first("image")}}</p>
                                                @enderror
                                                   <br>
                                                   <div class="form-group">
                                                      <label for="exampleFormControlInput1" style="color:black;text-align:left;">Name</label>
                                                      <input type="text" value="{{old('name')}}" name="name" class="form-control"  placeholder="Enter the Name" required>
                                                      @error('name')
                                                      <p class="alert alert-danger alert-block">{{$errors->first("name")}}</p>
                                                     @enderror
                                                     <br>
                                                     <label for="exampleFormControlInput1"  style="color:black">Designation</label>
                                                      <input type="text" value="{{old('designation')}}" name="designation" class="form-control"  placeholder="Enter the Designation" required>
                                                      @error('designation')
                                                      <p class="alert alert-danger alert-block">{{$errors->first("designation")}}</p>
                                                      @enderror
                                                      <br>
                                                      <label for="exampleFormControlInput1"  style="color:black">Message</label>
                                                      <textarea type="textarea"  name="message" style="height:200px;width:100%"  class="form-control" placeholder="Please type....." required> {{old('message')}}</textarea>
                                                      @error('message')
                                                      <p class="alert alert-danger alert-block">{{$errors->first("message")}}</p>
                                                      @enderror
                                                   </div>
                                                   <button class="btn btn-primary" style="margin:11px;border-radius:10px;"><i class="fa fa-upload"></i> Upload</button>
                                                </div>
                                             </form>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <div class="modal-footer">
                             <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                  </modal>
                  
<br>

<div class="row">
@foreach($data as $gallery)
   <!-- image card  -->
   <div class="col-md-4" style="margin-bottom:5px;padding-top:10px;padding-bottom:10px;">
      <div class="item" style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);padding:20px;border-radius:10px;">
         <div class="card item-card card-block">
            <img class="card-img-top"  src="{{asset('image/testimonial/'.$gallery->image)}}" alt="Card image" style="width:100%;height:150px">
            <h3 style="color:black;">{{$gallery->name}}</h3>
            <h5>{{$gallery->designation}}</h5>
            <div class="card-body">
               <p class="card-title">{{$gallery->body}}</p>
               <form action="/admins/testimonial/gallery/{{$gallery->id}}" method="post">
                  @csrf
                  @method("DELETE")
                  <center><button onclick="return confirm('Are you sure');" style="width:100%;" class="btn btn-white stretched-link"><i class="fa fa-trash text-danger"></i> Delete</button></center>
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