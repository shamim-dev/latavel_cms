@extends('admin.layout')
@section('a')

<div class="container" >
            <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
                <div style="margin-left: 120px;"> 




<div class="container" >
    <div class="row">
        <div class="col-md-1 col-sm-2">
            
        </div>
        <div class="col-md-11 col-sm-10" style="border-top: 1px solid #D14B54; margin-top: 5px; background: #f5f5f5f5; background-color: #337AB7;">
        <div style="padding: 0px 0px; " >
             <div style="float: left;">
                    <a href="{{action('studenController@show')}}"  style="color: white;"><i class="icon_trash_alt"></i></a> </div>
             <div align="right">
                    <a href="{{action('studenController@show')}}"  style="color: white;"><i  class="icon_close_alt2" salign="right" ></i></a>
             </div>
              
            <div class="row" style="padding: 0px 100px; color: white;">
                <header style="font-size: 25px; margin-top:2px; text-align: center;" >
                            Show Student Details Informations
                    </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid ;">
                   <hr style="margin-top:2px; border:2px solid ;">


                   

@if(Session::has('flash_message'))

    <div class="alert alert-danger " align="center">
        <i  class="icon_info_alt " ></i> {{ Session::get('flash_message') }}
    </div>
@endif
                    
                    
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