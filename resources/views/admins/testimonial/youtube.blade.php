
@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','active')
@section('coll','in')
<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Youtube</h3>
      <div class="row">
         <div class="col-md-12">
            <!-- LABELS -->
            <div class="panel" style="border-radius:15px;">
               <div class="panel-heading">
               </div>
               <div class="panel-body">

               <!-- form start  -->
                  <div class="row">
                     <div class="col-md-12 badge-dark">
                        <div class="item ">
                           <div class="card item-card card-block">
                              <center>
                                 <button class="btn btn-primary" style="border-radius:10px;margin-bottom:10px;" data-toggle="modal" data-target="#myModal">Add Youtube Video <i class="fa fa-plus"></i></button>
                              </center>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- form end -->

                  <modal class="modal" id="myModal">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                                <h3 class="modal-title text-center" style="font-weight:800;color:black;">Add Youtube Video</h3>
                           </div>
                           <div class="row">
                              <div class="col-md-12 badge-dark">
                                 <div class="item ">
                                    <div class="card item-card card-block">
                                       <center>
                                          @if($message=Session::get('message'))
                                           <div class="alert alert-success alert-block">
                                             <button type="button" class="close" data-dismiss="alert">x</button>
                                             <strong>{{$message}}</strong>
                                           
                                           </div>
                                           @endif
                                          <br>
                                          <form action="/admins/testimonial/youtube" method="POST">
                                          @csrf
                                             <div class="form-group" style="margin-top:15px">
                                                <input type="text" name="youtubelink" value="" style="width:80%" class="form-control" placeholder="Enter the Youtube Link">
                                                @error('youtubelink')
                                                <p class="alert alert-danger alert-block">{{$errors->first('youtubelink')}}</p>
                                                @enderror
                                                <br>
                                                <button class="btn btn-primary" style="margin:11px"><i class="fa fa-upload"></i> Upload</button>
                                             </div>
                                          </form>
                                       </center>
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

                  <!-- image display    -->
                  <br>
                 
                  <div class="row">
                     @foreach($data as $link)
                        <!-- image card  -->
                        <div class="col-md-4" style="margin-bottom:15px;">
                           <div class="item" style="background-color:white;padding:20px;border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
                              <div class="card item-card card-block">
                                 <iframe class="card-img-top" src="{{$link->youtubelink}}" alt="Card image" style="width:100%;height:200px;border-radius:10px;"></iframe>
                                 <div class="card-body">
                                    <form action="/admins/testimonial/youtube/{{$link->id}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <center><button onclick="return confirm('Are you sure');" class="btn stretched-link" style="border-radius:10px;margin-top:20px;background-color:#F5F5FA;"><i class="fa fa-trash text-danger"></i> Delete</button></center>
                                    </form>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- all image card end -->
                     @endforeach
                  </div>
            
                  <!-- image display end  -->
               </div>
         
            </div>
          
            <!-- END LABELS -->
         </div>
      </div>
   </div>
</div>
<!-- END MAIN CONTENT -->
@endsection