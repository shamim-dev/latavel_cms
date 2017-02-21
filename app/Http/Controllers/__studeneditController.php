<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Http\Requests;
use App\student;
use DB;
use Session;
class studeneditController extends Controller
{
    
    public function update(Request $request)
    {
       $post=$request->all();
        $data=array(
            
            
            'name'=>isset($post["name"])?$post["name"]:"",
            'f_name'=>isset($post["f_name"])?$post["f_name"]:"",
            'm_name'=>isset($post["m_name"])?$post["m_name"]:"",
            'email'=>isset($post["email"])?$post["email"]:"",
            'email'=>isset($post["email"])?$post["email"]:"",
            'mobile'=>isset($post["mobile"])?$post["mobile"]:"",
            'address'=>isset($post["address"])?$post["address"]:"",
            'gender'=>isset($post["gender"])?$post["gender"]:"",
            'institution'=>isset($post["institution"])?$post["institution"]:"",
            'paid_amnt'=>isset($post["paid_amnt"])?$post["paid_amnt"]:"",
            'crs_name'=>isset($post["crs_name"])?$post["crs_name"]:"",
            'ses_name'=>isset($post["ses_name"])?$post["ses_name"]:"",
            'crs_start'=>isset($post["crs_start"])?$post["crs_start"]:"",
            'crs_spr'=>isset($post["crs_spr"])?$post["crs_spr"]:"",
            'next_amnt_alert'=>isset($post["next_amnt_alert"])?$post["next_amnt_alert"]:"",
            
              
         );
     DB::table('students')->where('id', $post['id'])->update($data);   

     $result=DB::table('students')->get();
      return view('stdn\show_stdn')->with('data',$result);
    }

    
    
}
