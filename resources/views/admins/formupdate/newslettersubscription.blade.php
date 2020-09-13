@extends('layouts.adminlayouts')
@section('admincontents')
@section('gall','collapse')
@section('formcoll','in')
@section('form','active')
<div class="main">
   <div class="main-content">
      <div class="container-fluid">
         <h3 class="page-title">Newsletter Subscription</h3>
         <div class="row">
            <div class="col-md-12">
               <!-- TABLE NO PADDING -->
               <div class="panel">
                  <div class="panel-heading ">
                     <div class="row">
                        <div class="col-md-3">
                           <h3 class="panel-title">Filter Results</h3>
                        </div>
                        <form action="#" method="post">
                           <div class="col-md-3">
                              <select class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="verified">Verified</option>
                                 <option value="recent">Recent added</option>
                                 <option value="not-verified">Not-Verified</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <select class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="verified">Verified</option>
                                 <option value="recent">Recent added</option>
                                 <option value="not-verified">Not-Verified</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <p class="demo-button btn btn-primary">
                                 <button type="button" class="fa fa-search">Filter</button>
                              </p>
                           </div>
                        </form>
                     </div>
                  </div>
                
                  <div class="panel-body no-padding">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Email id</th>
                              <th>SubScription Date</th>
                              <th>verified</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($subcription as $sub)
                           <tr>
                              <td>{{$sub->id}}</td>
                              <td>{{$sub->email}}</td>
                              <td>{{$sub->date}}</td>
                              <td>
                                 <div class="row">
                                    <form action="#">
                                       <div class="col-md-6">
                                          <label class="fancy-radio">
                                          <input name="gender" value="male" type="radio">
                                          <span><i></i>Verified</span>
                                          </label>
                                          <label class="fancy-radio">
                                          <input name="gender" value="female" type="radio" checked>
                                          <span><i></i>Not-Verified</span>
                                          </label>
                                       </div>
                                       <div class="col-md-6 ">
                                          <p class="demo-button">
                                             <button type="button" class="btn btn-primary">Save</button>
                                          </p>
                                       </div>
                                    </form>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                           <!-- end  -->
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END TABLE NO PADDING -->
            </div>
         </div>
      </div>
   </div>
</div>
@endsection