@extends('admin.layout')
@section('a')
<div class="container" >
            <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
                <div style="margin-left: 120px;"> 

                   
                   <header class="panel-heading" style="font-size: 29px; margin-top:2px;">
                            Show list Of Student
                    </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid #03C;">
                   <hr style="margin-top:2px; border:2px solid #03C;">

@if(Session::has('flash_message'))
    <div class="alert alert-danger" align="center">
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th><i class="icon_id_alt"></i> SL</th>
                                 <th><i class="icon_profile"></i> Name</th>
                                 <th><i class="icon_calendar"></i> REG Year</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><!-- <i class="icon_pin_alt"></i> Address --></th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>

                               @foreach ($data as $data )
                              <tr>
                                 <td>{{$data->id }} </td>
                                 <td>{{$data->name }}</td>
                                 <td align="center">{{$data->year }}</td>
                                 <td>{{$data->email }}</td>
                                 <td><!-- {{$data->address }} --></td>
                                 <td>{{$data->mobile }}</td>

                                 <!-- <td><?php //echo {{$data->id }}?> </td>  alternate
                                 <td><?php //echo $data->name ?></td>
                                 <td><?php //echo $data->created_at ?></td>
                                 <td><?php //echo $data->email ?></td>
                                 <td><?php //echo $data->address ?></td>
                                 <td><?php //echo $data->mobile ?></td> -->
                                 
                                 <td>
                                
                                  <div class="/btn-group">
                                      <a class="btn btn-primary" href="stdn_details/{{$data->id}}" title="View Details"><i class="icon_zoom-in_alt"></i></a>

                                      
                                      <a class="btn btn-primary" href="stdn_details/" title="View Details" style="height: 33px;"  data-toggle="modal" data-target="#myModal2{{$data->id}}"><i class="icon_zoom-in_alt"></i></a>




                                      <!--  <i class="icon_zoom-in_alt btn btn-primary" style="height: 33px;"  data-toggle="modal" data-target="#myModal2"></i>  -->
                                      <a class="btn btn-warning" href="edit_stdn/{{$data->id}}"><i class="icon_pencil-edit"></i></a> 
                                      <i class="icon_trash_alt btn btn-danger" style="height: 33px;" data-toggle="modal" data-target="#myModal{{$data->id }}"></i>


<!-- Modal   -->
<div class="modal fade" id="myModal{{$data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong>Alert!</strong></h4>
      </div>
      <div class="modal-body">
       <strong>Do You really want to Delete?</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="stdn_delete/{{$data->id}}" type="button" class="btn btn-danger">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>



<!-- Modal2   -->
<div class="modal fade" id="myModal2{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

                    </section>
                  </div>
              </div>
              </div>
              </div>
              </div>



 @endsection()
 