@extends('admin.layout')
@section('a')
<div class="container" >
        <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
            <div style="margin-left: 120px;"> 

                   
                   <header class="panel-heading" style="font-size: 29px; margin-top:2px; text-align: center;">
                            <i class="icon_pencil_alt"></i>  Update Student Information 
                                                </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid #03C;">
                   <hr style="margin-top:2px; border:2px solid #03C;">
               
<!-- <?php //print_r($stdn); ?> -->
            <div class="row" style="padding: 0px 5px;">
                
               <form action="{{action('studeneditController@update')}}" method="post" class="form">  
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class=" col-sm-12 col-md-6">
                       <div class="thumbnail familycol"> 

                        <legend style="background-color:#F8F8F8;">
                        
                            <i class="icon_profile"></i> Personal Information
                        </legend>
                        
                        <div class="row">
                                <div class="col-xs-12 col-md-12" style="padding-bottom: 10px;">
                                    <label class="required">Student's Full name <i class="icon_cog"></i></label> 
                                    <input type="hidden" name="id" value="{{$stdn->id}}">
                                    <input type="text" required name="name" value="{{$stdn->name}}" class="form-control input-sm" placeholder="Full name"  />
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Father's name</label>
                                    <input type="text" required name="f_name" value="{{$stdn->f_name}}" class="form-control " placeholder="Father Name"  />
                                </div>
                                
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Mother's name</label>
                                    <input type="text" required name="m_name" value="{{$stdn->m_name}}" class="form-control input-sm" placeholder="Mother's Name"  />
                                </div>
                            </div>
                                
                                
                                
                            <label class="required">Gender : </label>
                            <label class="radio-inline">
                                <input type="radio"  name="gender" 
                                value="Male"  />                        
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" 
                                value="Female"  />                        
                                Female
                            </label>
                            <br>
                            <label class="required">Address</label>
                            <textarea class="form-control input-sm" name="address" rows="3" placeholder="Address">{{$stdn->address}}</textarea>
                            <label class="required">Emai ID</label>
                            <input type="text" required name="email" value="{{$stdn->email}}" class="form-control input-sm"/>
                            <label class="required">Telephone</label>
                            <input type="text" required name="mobile" value="{{$stdn->mobile}}" class="form-control input-sm"/>
                            <label class="required">Institution Name</label>
                            <input type="text" required name="institution" value="{{$stdn->institution}}" class="form-control input-sm"/>
                            
                        
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail familycol">
                    <legend style="background-color:#F7F7F7"><i class="icon_book"></i> Course Information</legend>
                            <div class="row">
                            
                                <div class="col-xs-6 col-md-6" style="padding-bottom: 10px;">
                                 
                                    <label class="required">Select course name</label>
                                    <select   id="plan" name="crs_name" style="background-color: #ccc; color: white" class=" form-control input-sm">
                                                                         
                                    
                                    <option value='{{$stdn->crs_name}}' >{{$stdn->crs_name}}</option>
                                    
                                    </select> 
                               
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Select Session  </label>
                                    <select  name="ses_name" style="background-color: #ccc; color: white" class=" form-control input-sm">
                                    <option value='{{$stdn->ses_name}}' >{{$stdn->ses_name}}</option>

                                    </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="ajaxnotes"></div>
                            </div>
                            <input type="hidden" name="desc" id="desc" />
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <label class="required">Start date:</label>
                                    <input type="date" value='{{isset($stdn->crs_start)?$stdn->crs_start : ""}}' name="crs_start" class="form-control input-sm datepicker"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="required">Expire date</label>
                                    <input type="date" value='{{$stdn->crs_spr}}' name="crs_spr" class="form-control input-sm datepicker"/>
                                </div>
                            </div>

                        

                            <div class="row">
                                
                                <div class="col-md-2"></div>
                                
                                <div class="col-md-8" style="margin-top: 10px; border: 1px solid black; background-color: #FFF6D7; text-align: center;">
                                    <label class="required"> <strong>Course  Durations:</strong></label> <strong style="color: green;"> {{$stdn->crs_duration}}</strong>
                                    <label class="required"> <strong>&nbsp;&nbsp;&nbsp;&nbsp; Course Fees:</strong></label> <strong style="color: green;"> {{$stdn->fees}}.00 /-</strong>
                                    <!-- <input type="text" name="" class="form-grouped" /> -->
                                   
                                </div>
                                <div class="col-md-2"></div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                            <label style="display: block; border-bottom: 1px solid #ddd;"></label>
                                </div>
                             </div>
                                
                            <div class="row" style="padding-bottom: 10px;">

                                <div class="col-md-4">
                                    <label style="color: green;">Paid amount</label>
                                    <input type="text"  value='{{$stdn->paid_amnt}}' name="" readonly class="form-control input-sm"/>
                                </div>
                                
                                <div class="col-md-4">
                                    <label style="color: red;">Unpaid amount</label>
                                    <input type="text"   value='<?php echo ($stdn->fees - $stdn->paid_amnt) - $stdn->discount ?>' readonly class="form-control input-sm"/>
                                </div>

                                <div class="col-md-4">
                                    <label >Discount</label>
                                    <input type="text" name="discount" value='{{$stdn->discount}}' class="form-control input-sm"/>
                                </div>
                                
                             </div>
                             
                             <div class="row">

                             
                                <div class="col-md-6" align="center">
                                    <label > <strong style="color: green;"><i class=" icon_currency_alt"></i> Payment Now</strong></label>
                                    <input type="text" name="paid_amnt" value='<?php echo ($stdn->fees - $stdn->paid_amnt) - $stdn->discount ?>' class="form-control input-sm" style="background-color: #BCED91;  border: 1px solid blue; text-align: center; font-size: 18px; font-weight: bold; color: #000;"/>
                                </div>
                                
                                <div class="col-md-6" align="center">
                                    <label >Next installment</label>
                                    <input type="date" value='{{$stdn->next_amnt_alert}}'  name="next_amnt_alert" class="form-control input-sm" style="background-color: #BCED91; border: 1px solid blue; text-align: center;"/>
                                </div>
                                
                             </div>
                            

                            
                        
                             
                            <span class="help-block">By clicking <em><strong>Update Information</strong></em>, you agree to Change your Information.</span>
                            <button class="btn btn-lg btn-primary btn-block signup-btn"  data-toggle="modal" data-target="#myModal">
                               <i class="icon_cloud-upload"  ></i>&nbsp;&nbsp;&nbsp;&nbsp; Update Information</button>
                    

<!-- Modal   -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong>Alert!</strong></h4>
      </div>
      <div class="modal-body">
       <strong>Do you really want to update?</strong><br> It may be changed some calculation
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-success">Yes </button>
      </div>
    </div>
  </div>
</div>






     
                    </div>
                </div>
                </form> 


          
        

              </div>
           </div>         
       </div>
</div>


 @endsection()
 
 