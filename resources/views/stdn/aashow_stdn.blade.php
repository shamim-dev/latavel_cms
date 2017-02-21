@extends('admin.layout')
@section('a')

<div class="container" >
            <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
                <div style="margin-left: 120px;"> 

                    <h1>Show list Of Student</h1>
                    <hr style="margin-bottom:0px; border:1px solid #03C;">
                    <hr style="margin-top:2px; border:2px solid #03C;">

                  <table class="table table-hover">
                      <tr style="background-color: #ccc;">
                        <th style="color: #394A59;">Id</th>
                        <th style="color: #394A59;">Name</th>
                        <!-- <th style="color: #394A59;">Father's Name</th>
                        <th style="color: #394A59;"> Mother's Name</th> -->
                        <th style="color: #394A59;">Email</th>
                        <th style="color: #394A59;">Mobile No</th>
                        <th style="color: #394A59;">Address</th>
                        <th style="color: #394A59; padding-left: 30px;" >Action</th>
                      </tr>
                      <?php foreach ($data as $data ) { ?>
                      <tr>
                        <th><?php echo $data->id ?>.</th>
                        <td><?php echo $data->name ?></td>
                        <!-- <td><?php echo $data->f_name ?></td>
                        <td><?php echo $data->m_name ?></td> -->
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->mobile ?></td>
                        <td><?php echo $data->address ?></td>
                        <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">delete</a></td>
                      </tr>
                      <?php  }?>
                    </table>
                </div>                     
            </div>
</div>


 @endsection()
 