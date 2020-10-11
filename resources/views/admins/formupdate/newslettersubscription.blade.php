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
            <div class="col-md-12" style="border-radius:15px;">
               <!-- TABLE NO PADDING -->
               <div class="panel">
                  <div class="panel-heading ">
                     <div class="row">
                        <div class="col-md-3">
                           <h3 class="panel-title" style="font-weight:700;">Filter Results</h3>
                        </div>
                        <form action="/admins/newslettersubcription/filter" method="POST">
                        @csrf
                           <div class="col-md-3">
                              <select name="filter1" class="form-control">
                                 <option  value="null">Select one</option>
                                 <option  value="verified">Verified</option>
                                 <option value="not-verified">Not-Verified</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <select name="filter2" class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="recent">Recent added</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                                <button type="submit" style="background-color:#00AAFF;color:white;padding:5px 20px 7px 20px;border-radius:15px !important;"><i class="fa fa-search"></i> Filter</button>
      
                           </div>
                        </form>
                     </div>
                     <br><br>
                     <form action="/admins/newslettersubcription/download" method="POST">
                     @csrf
                     <div class="row" style="float:right;margin-right:130px;margin-bottom:30px;">
                     <input type="date" name="from" id="" placeholder="date from" style="border-radius:15px;padding:5px 30px 5px 30px;">
                     <input type="date" name="to" id="" placeholder="date to"  style="border-radius:15px;padding:5px 30px 5px 30px;"> 
                     <BUtton type="submit" style="background-color:orange;color:white;padding:5px 30px 5px 30px;border-radius:15px;" ><i class="fa fa-download"></i> Download</BUtton>
                     </form>
                  </div>
                
                  <div class="panel-body no-padding">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Email id</th>
                              <th>SubScription Date</th>
                              <th>Verified</th>
                              <th>Verified or Not</th>
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
                                    <form action="/admins/newslettersubscription/{{$sub->id}}" method="POST">
                                    @csrf 
                                    @method('PUT')
                        
                                       <div class="col-md-6">
                                          <label class="fancy-radio">
                                          <input name="verified" value="verified" type="radio">
                                          <span><i></i>Verified</span>
                                          </label>
                                          <label class="fancy-radio">
                                          <input name="verified" value="not-verified" type="radio" checked>
                                          <span><i></i>Not-Verified</span>
                                          </label>
                                       </div>
                                       <div class="col-md-6 ">
                                          <button type="submit" class="btn btn-primary" style="color:white;background-color:#00AAFF;padding:6px 25px 6px 25px;">Save <i class="fa fa-save"></i></button>
                                       </div>
                                    </form>
                                 </div>
                              </td>
                              <td>{{$sub->verified}}</td>
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