@extends('admin.layout')
@section('a')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
<div class="container" ng-app="">
        <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
            <div style="margin-left: 120px;"> 

                   




                   <header class="panel-heading" style="font-size: 29px; margin-top:2px;">
                            <i class="icon_document"></i>  Student Registration form
                    </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid #03C;">
                   <hr style="margin-top:2px; border:2px solid #03C;">
               
     @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<!-- <?php print_r($crs); ?> -->

            <div class="row" style="padding: 0px 5px;">
                
               <form action="store" method="post" class="form" >  
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class=" col-sm-12 col-md-6">
                       <div class="thumbnail familycol" style=" border-top: 4px solid yellow; border-radius: 2%"> 

                        <legend style="background-color:#F8F8F8;">
                        
                            <i class="icon_profile"></i> Personal Information
                        </legend>
                        
                        <div class="row" style="padding-bottom: 10px;">
                                <div class="col-xs-12 col-md-12">
                                    <label class="required">Student's Full name <i class="icon_cog"></i></label> 
                                    <input type="text" name="name" value="" class="form-control input-sm" placeholder="Full name"  />
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Father's name</label>
                                    <input type="text"  name="f_name" value="" class="form-control " placeholder="Father Name"  />
                                </div>
                                
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Mother's name</label>
                                    <input type="text" name="m_name" value="" class="form-control input-sm" placeholder="Mother's Name"  />
                                </div>
                            </div>
                                
                                
                                
                            <label class="required">Gender : </label>
                            <label class="radio-inline">
                                <input type="radio"  name="gender" value="Male" id=male />                        
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Female" id=female />                        
                                Female
                            </label>
                            <br>
                            <label class="required">Address</label>
                            <textarea class="form-control input-sm" name="address" rows="3" placeholder="Address"></textarea>
                            <label class="required">Emai ID</label>
                            <input type="text"  name="email" value="" class="form-control input-sm"/>
                            <label class="required">Telephone</label>
                            <input type="text" name="mobile" value="" class="form-control input-sm"/>
                            <label class="required">Institution Name</label>
                            <input type="text" name="institution" value="" class="form-control input-sm"/>
                            
                        
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail familycol" style=" border-top: 4px solid yellow; border-radius: 2%;">
                    <legend style="background-color:#F7F7F7;"><i class="icon_book"></i> Course Information</legend>
                            <div class="row" style="padding-bottom: 10px;">
                            
                                <div class="col-xs-6 col-md-6">
                                 
                                    <label class="required">Select course name</label>
                                    <select ng-model="myVar" id="plan" name="crs_name" class="btn btn-default form-control input-sm">
                                    <option value="" style="background-color: #ccc;" selected="selected" >--Select One--</option>
                                    @foreach($crs as $crsname)
                                    <option value='{{$crsname->crs_name}}'  >{{$crsname->crs_name}}</option>
                                     @endforeach
                                    </select> 
                               
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Select Session  </label>
                                    <select  name="ses_name" class="btn btn-default form-control input-sm">
                                    <option value='' style="background-color: #ccc;"  >--Select One--</option>
                                     @foreach($ses as $sesname)
                                    <option value='{{$sesname->ses_name}}' class="">{{$sesname->ses_name}}</option>
                                     @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="ajaxnotes"></div>
                            </div>
                            <input type="hidden" name="desc" id="desc" />
                            <div class="row">


                                <div class="col-md-3">
                                    <label class="required">Year</label><br>
                                    
                                  {{ Form::selectRange('year', 2010, 2017, 2016,  ['class' => 'form-control']) }}



                                </div>

                                
                                <div class="col-md-5">
                                    <label class="required">Start date:</label>
                                    <input type="date" name="crs_start" class="form-control input-sm datepicker"/>
                                </div>
                                <div class="col-md-4">
                                    <label class="required">Expire date</label>
                                    <input type="date" name="crs_spr" class="form-control input-sm datepicker"/>
                                </div>

                                
                            </div>

                        

                            <div class="row">
                                
                                <div class="col-md-2"></div>
                                
                                <div ng-switch="myVar" class="col-md-8" style="margin-top: 10px; border: 1px solid black; background-color: #FFF6D7; text-align: center;">
                                    <div  ng-switch-when=""> Please Select Course Name</div>
                                    @foreach($crs as $crsname)
                                        <div ng-switch-when="{{$crsname->crs_name}}">
                                            <label class="required"> <strong>Course  Durations:</strong></label> <strong style="color: green;"> {{$crsname->crs_duration}}</strong>
                                            <label class="required"> <strong>&nbsp;&nbsp;&nbsp;&nbsp; Course Fees:</strong></label> <strong style="color: green;"> {{$crsname->fees}}.00 /-</strong>
                                            <input type="hidden" value="{{$crsname->fees}}" name="fees"/>
                                            <input type="hidden" value="{{$crsname->crs_duration}}" name="crs_duration"/>

                                        </div>
                                    @endforeach
                                   
                                </div>
                                <div class="col-md-2"></div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                            <label style="display: block; border-bottom: 1px solid #ddd;"></label>
                                </div>
                             </div>
                                
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-6">
                                    <label style="color: green;">Paid amount</label>
                                    <input type="text"  readonly="" class="form-control input-sm"/>
                                </div>
                                
                                <div class="col-md-6">
                                    <label style="color: red;">Unpaid amount</label>
                                    <input type="text" value="" name="unpaid_amnt" readonly="" class="form-control input-sm"/>
                                </div>
                                
                             </div>
                             
                             <div class="row">
                                <div class="col-md-4">
                                    <label >Discount</label>
                                    <input type="text" name="discount" placeholder="0.00" class="form-control input-sm"/>
                                </div>

                                <div class="col-md-4" align="center">
                                    <label > <strong style="color: green;"><i class=" icon_currency_alt"></i> Payment</strong> </label>
                                    <input type="text" name="paid_amnt" placeholder="0.00" class="form-control input-sm"/>
                                </div>
                                
                                <div class="col-md-4">
                                    <label >Next installment</label>
                                    <input type="date" name="next_amnt_alert" class="form-control input-sm"/>
                                </div>
                                
                             </div>
                            

                            
                        
                             
                            <span class="help-block">By clicking <em><strong>Submit Form</strong></em>, you agree to our Terms and that you have read our Data Use Policy.</span>
                            <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                               <i class="icon_cloud-upload"></i>&nbsp;&nbsp;&nbsp;&nbsp; Submit Form to cloud</button>
                         
                    </div>
                </div>
                </form> 
          
        

              </div>
           </div>         
       </div>
</div>


 @endsection()
 
 