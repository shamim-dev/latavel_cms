@extends('admin.layout')
@section('a')

<div class="container" >
            <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
                <div style="margin-left: 120px;"> 




<div class="container" >
    <div class="row">
        <div class="col-md-1 col-sm-2">
            
        </div>
        <div class="col-md-11 col-sm-10" style="border-top: 1px solid #D14B54; margin-top: 5px; background: #f5f5f5f5; background-color: #337AB7; box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);">
        <div style="padding: 0px 0px; " >
             <div style="float: left;">

<!-- Button trigger modal -->
                    <a href="stdn_delete/{{$data->id}}"  style="color: white;"><i class="icon_trash_alt" data-toggle="modal" data-target="#myModal"></i></a> </div>



             <div align="right">
                    <a href="{{action('studenController@show')}}"  style="color: white;"><i  class="icon_close_alt2" salign="right" ></i></a>
             </div>
             





<!-- Modal ------ -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<!--//model-->




              
            <div class="row" style="padding: 0px 100px; color: white;">
                <header style="font-size: 25px; margin-top:2px; text-align: center;" >
                            Show Student Details Informations
                    </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid ;">
                   <hr style="margin-top:2px; border:2px solid ;">

                    <div class="row">
                        <div class="col-md-12 col-sm-3" style="text-align: center; padding-right: 0px;"><label><strong ><pre><a href="{{action('studenController@edit', $data->id)}}"  style="color: green;"><i class="icon_pencil-edit"></i>  </a>  Student ID :  STDN-{{$data->id }}                   </pre></strong></label></div>
                        
                        
                    </div>
                    <div class="row" >
                        <div class="col-md-4 col-sm-3"><label><strong style="font-size: 20px;"><em>Full Name:</em></strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong style="font-size: 20px;"><em>{{$data->name }}</em></strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Father's Name:</label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->f_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Mother's Name:</label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->m_name }}</strong></label></div>
                    </div><div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Gender:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->gender }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Address:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->address }}</strong></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Mobile:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->mobile }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Email:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->email }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>institution:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label id="gp"><strong>{{$data->institution }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Course Name:</label></div>
                        <div class="col-md-8 col-sm-9"><label id="pp"><strong>{{$data->crs_name }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Date of joining:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->created_at }}</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Expire date:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->crs_spr }}</strong></label></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Paid amount:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->paid_amnt }}/-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Discount:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong style="color: #F5D76E; font-size: 19px;"> {{$data->discount}} -</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Unpaid amount:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong style="color: #F5D76E; font-size: 19px;"><?php echo $data->fees - $data->paid_amnt - $data->discount ?>/-</strong></label></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-3"><label><strong>Next installment date:</strong></label></div>
                        <div class="col-md-8 col-sm-9"><label><strong>{{$data->next_amnt_alert }}</strong></label></div>
                    </div><br>
                    
                    
                </div>
              
            </div>
        </div>
    </div>
    </div>

</div>
</div>
</div>
</div>

@endsection()