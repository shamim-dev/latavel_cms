@extends('admin.layout')
@section('a')
<style>
	
	.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 30px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    /background-color:  #2199C7; 
    color: blue; 
}
.nav-sidebar .active a:hover {
    background-color: #E50000;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #E50000;
    border-color: #E50000;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#0b56a8;
    border-color: #0b56a8;
}
article h2{color:#333333;}
h2{color:#0b56a8;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 
 .container .text-style
{
  text-align: justify;
  line-height: 23px;
  margin: 0 13px 0 0;
  font-size: 19px;
}

</style>
<div class="container" style="margin-left: 180px;">
    <div class="content" style="margin-top: 63px; background-color:;">
             
                      
            <div class="row">
				<div class="col-lg-12" >
					<h3 class="page-header" ><i class="fa fa-laptop"></i> All Notifications</h3>
					<ol class="breadcrumb" style="background-color: #2199C7; color: white; margin-bottom: 0px;">
						<li><i class="fa fa-home"></i><a href="{!!url('/dashboard')!!}" style="color: white;">Home</a></li>
						<li><i class="fa fa-laptop"></i>adminsettings</li>						  	
					</ol>
				</div>
			</div>



             <div class="row">
               	
					
						
<div class="container">
	<div class="col-sm-2">
    <nav class="nav-sidebar">
		<ul class="nav tabs" style="margin-top: 35px;">
          <li class="active"><a href="#tab1" data-toggle="tab">Today's Installment</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">Due Installment</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Expired Studentship</a></li>                               
		</ul>
	</nav>
		
</div>
<!-- tab content -->
<div class="tab-content" style="" >

<div class="tab-pane active text-style" id="tab1" >

                      
                          <h2 align="center"><strong>List of Today's Installment</strong></h2 >
                          
                        <table class="table table-striped table-advance table-hover" style="width: 82%; color:#FF7E02; ">
                           <tbody>
                              <tr>
                                <th><i class="icon_id_alt"></i> SL</th>
                                 <th><i class="icon_profile"></i> Name</th>
                                 <th><i class="icon_id_alt"></i> Student ID</th>
                                 <th><i class=""></i> Unpaid Amount</th>
                                 <th><i class="icon_calendar"></i> Expire Date</th>
                                 <th><!-- <i class="icon_pin_alt"></i> Address --></th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>

                               <?php $s=1; ?>
               @foreach ($data as $data )
               
                              <tr style="font-size: 15px;">
                                <td>  <?php echo $s ; ?> </td>
                                 <td>{{$data->name }}</td>
                                 <td>{{$data->id }}</td>
                                 <td>{{$data->unpaid_amnt}}.00-/</td>
                                 <td>{{$data->next_amnt_alert }}</td>
                                 <td><!-- <i class="icon_pin_alt"></i> Address --></td>
                                 <td>{{$data->mobile }}</td>
                                 <td> 
              <?php $s++ ?>
 
                                   <div class="btn-group">
                                     
                                      <i class="icon_zoom-in_alt btn btn-primary" style="height: 33px;"  data-toggle="modal" data-target="#myModal2{{$data->id }}"></i> 
                                      <a class="btn btn-warning" href="edit_stdn/{{$data->id}}"><i class="icon_pencil-edit"></i></a> 
             

<!-- Modal2   -->
<div class="modal fade" id="myModal2{{$data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center"><strong>Student Details Informations</strong></h4>
      </div>
      <div class="modal-body" style="padding: 0px 50px; color: white; background-color: #337AB7;">
       <div class="row" >
               
                   

                    <div class="row">
                        <div class="col-md-12 col-sm-3" style="text-align: center; padding-right: 0px;"><label><strong ><pre><a href="edit_stdn/{{$data->id}}"  style="color: green;"><i class="icon_pencil-edit" style=" background-color: yellow; color: myellow;"></i>  </a>  Student ID :  STDN-{{$data->id }}                   </pre></strong></label></div>
                        
                        
                    </div>
                    <div class="row" >
                        <div class="col-md-6 col-sm-6" align="right"><label><strong style="font-size: 20px;"><em>Full Name:</em></strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong style="font-size: 20px;"><em>{{$data->name }}</em></strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Father's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->f_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mother's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->m_name }}</strong></label></div>
                    </div><div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Gender:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->gender }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Address:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->address }}</strong></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mobile:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->mobile }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Email:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->email }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>institution:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label id="gp"><strong>{{$data->institution }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Course Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label id="pp"><strong>{{$data->crs_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Date of joining:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->created_at }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Expire date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->crs_spr }}</strong></label></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Paid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->paid_amnt }}/-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Unpaid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>00.00-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Next installment date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->next_amnt_alert }}</strong></label></div>
                    </div><br>
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="stdn_delete/{{$data->id}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

      
                                  </div>
                                  </td>
                              </tr>

                              @endforeach

                                                   
                           </tbody>
                        </table>
                   
       <hr>  

</div>





<div class="tab-pane text-style" id="tab2">


<h2 align="center"><strong>List of Due Student</strong></h2 >
                          
                        <table class="table table-striped table-advance table-hover" style="width: 82%; color:#FF7E02; ">
                           <tbody>
                              <tr>
                                <th><i class="icon_id_alt"></i> SL</th>
                                 <th><i class="icon_profile"></i> Name</th>
                                 <th><i class="icon_id_alt"></i> Student ID</th>
                                 <th><i class=""></i> Unpaid Amount</th>
                                 <th><i class="icon_calendar"></i> Expire Date</th>
                                 <th><!-- <i class="icon_pin_alt"></i> Address --></th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>


            <?php $s2=1; ?>
          @foreach ($duestdn as $data )
                              <tr style="font-size: 15px;">
                                <td>  <?php echo $s2 ; ?></td>
                                 <td>{{$data->name }}</td>
                                 <td>{{$data->id }}</td>
                                 <td>{{$data->unpaid_amnt}}.00-/</td>
                                 <td>{{$data->next_amnt_alert }}</td>
                                 <td><!-- <i class="icon_pin_alt"></i> Address --></td>
                                 <td>{{$data->mobile }}</td>
                                 <td>  
                                   <div class="btn-group">
               <?php $s2++ ?>                       

                                      <i class="icon_zoom-in_alt btn btn-primary" style="height: 33px;"  data-toggle="modal" data-target="#myModal3{{$data->id }}"></i> 

                                      <a class="btn btn-warning" href="edit_stdn/{{$data->id}}"><i class="icon_pencil-edit"></i></a> 
             

<!-- Modal3   -->
<div class="modal fade" id="myModal3{{$data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center"><strong>Student Details Informations</strong></h4>
      </div>
      <div class="modal-body" style="padding: 0px 50px; color: white; background-color: #337AB7;">
       <div class="row" >
               
                   

                    <div class="row">
                        <div class="col-md-12 col-sm-3" style="text-align: center; padding-right: 0px;"><label><strong ><pre><a href="edit_stdn/{{$data->id}}"  style="color: green;"><i class="icon_pencil-edit" style=" background-color: yellow; color: myellow;"></i>  </a>  Student ID :  STDN-{{$data->id }}                   </pre></strong></label></div>
                        
                        
                    </div>
                    <div class="row" >
                        <div class="col-md-6 col-sm-6" align="right"><label><strong style="font-size: 20px;"><em>Full Name:</em></strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong style="font-size: 20px;"><em>{{$data->name }}</em></strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Father's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->f_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mother's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->m_name }}</strong></label></div>
                    </div><div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Gender:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->gender }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Address:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->address }}</strong></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mobile:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->mobile }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Email:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->email }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>institution:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label id="gp"><strong>{{$data->institution }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Course Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label id="pp"><strong>{{$data->crs_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Date of joining:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->created_at }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Expire date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->crs_spr }}</strong></label></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Paid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->paid_amnt }}/-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Unpaid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>00.00-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Next installment date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->next_amnt_alert }}</strong></label></div>
                    </div><br>
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="stdn_delete/{{$data->id}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

      
                                  </div>
                                  </td>
                              </tr>

                              @endforeach

                                                   
                           </tbody>
                        </table>
                   
       <hr>  

</div>




<div class="tab-pane text-style" id="tab3">
 
<h2 align="center"><strong>List of Expired Students</strong></h2 >
                          
                        <table class="table table-striped table-advance table-hover" style="width: 82%; color:#FF7E02; ">
                           <tbody>
                              <tr>
                                <th><i class="icon_id_alt"></i> SL</th>
                                 <th><i class="icon_profile"></i> Name</th>
                                 <th><i class="icon_id_alt"></i> Student ID</th>
                                 <th><i class=""></i> Unpaid Amount</th>
                                 <th><i class="icon_calendar"></i> Expire Date</th>
                                 <th><!-- <i class="icon_pin_alt"></i> Address --></th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>

            <?php $s3=1; ?>
          @foreach ($xprStdn as $data )
                              <tr style="font-size: 15px;">
                                <td>  <?php echo $s3 ?> </td>
                                 <td>{{$data->name }}</td>
                                 <td>{{$data->id }}</td>
                                 <td>{{$data->unpaid_amnt}}.00-/</td>
                                 <td>{{$data->next_amnt_alert }}</td>
                                 <td><!-- <i class="icon_pin_alt"></i> Address --></td>
                                 <td>{{$data->mobile }}</td>
                                 <td>  
                                   <div class="btn-group">
              <?php $s3++ ?>        

                                      <i class="icon_zoom-in_alt btn btn-primary" style="height: 33px;"  data-toggle="modal" data-target="#myModal4"></i> 
                                      <a class="btn btn-warning" href="edit_stdn/{{$data->id}}"><i class="icon_pencil-edit"></i></a> 
             

<!-- Modal4   -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center"><strong>Student Details Informations</strong></h4>
      </div>
      <div class="modal-body" style="padding: 0px 50px; color: white; background-color: #337AB7;">
       <div class="row" >
               
                   

                    <div class="row">
                        <div class="col-md-12 col-sm-3" style="text-align: center; padding-right: 0px;"><label><strong ><pre><a href="edit_stdn/{{$data->id}}"  style="color: green;"><i class="icon_pencil-edit" style=" background-color: yellow; color: myellow;"></i>  </a>  Student ID :  STDN-{{$data->id }}                   </pre></strong></label></div>
                        
                        
                    </div>
                    <div class="row" >
                        <div class="col-md-6 col-sm-6" align="right"><label><strong style="font-size: 20px;"><em>Full Name:</em></strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong style="font-size: 20px;"><em>{{$data->name }}</em></strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Father's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->f_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mother's Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->m_name }}</strong></label></div>
                    </div><div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Gender:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->gender }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Address:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->address }}</strong></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Mobile:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->mobile }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Email:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->email }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>institution:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label id="gp"><strong>{{$data->institution }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Course Name:</label></div>
                        <div class="col-md-6 col-sm-6"><label id="pp"><strong>{{$data->crs_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Date of joining:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->created_at }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Expire date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->crs_spr }}</strong></label></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Paid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->paid_amnt }}/-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Unpaid amount:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>00.00-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" align="right"><label><strong>Next installment date:</strong></label></div>
                        <div class="col-md-6 col-sm-6"><label><strong>{{$data->next_amnt_alert }}</strong></label></div>
                    </div><br>
                    
                    
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="stdn_delete/{{$data->id}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

      
                                  </div>
                                  </td>
                              </tr>

                              @endforeach

                                                   
                           </tbody>
                        </table>
                   
       <hr>  

</div>




</div>
</div>
    
    
</div>
							
					
				
				
              </div>
    </div>    
</div>
 @endsection()