@extends('admin.layout')
@section('a')


<div class="container" style="margin-left: 180px;">
    <div class="content" style="margin-top: 63px; background-color:;">
             
                      
            <div class="row">
				<div class="col-lg-12" >
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb" style="background-color: #2199C7; color: white;">
						<li><i class="fa fa-home"></i><a href="" style="color: white;">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>


             <div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">	
					<div class="panel panel-default">
						<div class="panel-heading" >
						<h2 >
            <a href="{!!url('/dashboard/stdn_show')!!}" type="button" class="btn btn-primary" style="margin-left: 43px;"> <strong><i class="icon_group red"></i> Registered Students</strong> <span style="color: #000; background-color: white;" class="badge"> <?php echo $total ?></span></a> 
						 </h2>
							
						</div>
						<div class="panel-body" style="margin-top: 0px; padding: 0px 10px;" >
							<table class="table bootstrap-datatable countries" >
								<thead >
									<tr>
										<th></th>
										<th>Year</th>
										<th>Students</th>
										<th>Performance </th>
									</tr>
								</thead>   
								<tbody>
									<tr>
										<td style="color: red;"><i class="icon_datareport"></i></td>
										<td>2014 </td>
										<td><?php echo $t14 ?></td>
										
										<td>
											<div class="progress thin" style="margin-bottom:0px;">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $t14*100/$total.'%' ?>"><?php echo round($t14*100/$total).'%' ?>
												</div>
												
											</div>
											 	
										</td>
									</tr>
									<tr>
										<td style="color: blue;"><i class="icon_datareport"></i></td>
										<td>2015</td>
										<td><?php echo $t15 ?></td>
										
										<td>
											<div class="progress thin" style="margin-bottom:0px;">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $t15*100/$total.'%' ?>"><?php echo round($t15*100/$total).'%' ?>
												</div>
												
											</div>
											  	
										</td>
									</tr>
									<tr>
										<td style="color: purple;"><i class="icon_datareport"></i></td>
										<td>2016</td>
										<td><?php echo $t16 ?></td>
										
										<td>
											<div class="progress thin" style="margin-bottom:0px;">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($t16*100/$total).'%' ?>"><?php echo round($t16*100/$total).'%' ?>
												</div>
												
											</div>
											
										</td>
									</tr>

									<tr>
										<td style="color: orange;"><i class="icon_datareport"></i></td>
										<td>2017</td>
										<td> <?php echo $t17 ?></td>
										
										<td>
											<div class="progress thin" style="margin-bottom:0px;">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo $t17*100/$total.'%' ?>"><?php echo round($t17*100/$total).'%' ?>
												</div>
												
											</div>
											
										</td>
									</tr>
									
									
								</tbody>
							</table>
						</div>
	
					</div>				
					
				</div><!--/col-->
				
              </div>
  <!-- ----------------------------------------------- -->  




    </div>    
</div>
 @endsection()