@extends('admin.layout')
@section('a')
<div class="container" >
            <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
                <div style="margin-left: 120px;"> 

                   
                   <header class="panel-heading" style="font-size: 29px; margin-top:2px;">
                            Add Student
                    </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid #03C;">
                   <hr style="margin-top:2px; border:2px solid #03C;">
               
      <form action="store" method="post"> 
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Student Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Father's Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" name="f_name" placeholder="Father's Name">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Mother's Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" name="m_name" placeholder="Mother's Name">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="email" placeholder="Email">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="cell" class="col-sm-2 col-form-label">Mobile No</label>
      <div class="col-sm-10">
        <input type="" class="form-control" id="" name="mobile" placeholder="Mobile No">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
      </div>
    </div>
    <!-- <fieldset class="form-group row">
      <legend class="col-form-legend col-sm-2">Select One</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class="form-check disabled">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            Option three is disabled
          </label>
        </div>
      </div>
    </fieldset> -->
    <div class="form-group row">
      <label class="col-sm-2"></label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input"  type="checkbox"> Check me out
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" class="btn btn-primary">Save Record</button>
       
      </div>
    </div>
  </form>
  
                </div>
                      
            </div>
</div>


 @endsection()
 
 @section('script')
<script type="text/javascript">
$(function(){

	
		alert(0);

});
   /*$(document).on('click','.click',function(e){
    alert(0);
   })*/
 </script>
 @endsection()