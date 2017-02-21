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
            
            
            'name'=>$post["name"],
            'f_name'=>$post["f_name"],
            'm_name'=>$post["m_name"],
            'email'=>$post["email"],
            'email'=>$post["email"],
            'mobile'=>$post["mobile"],
            'address'=>$post["address"],
            'gender'=>isset($post["gender"])?$post["gender"]:"",
            'institution'=>$post["institution"],
            //'paid_amnt'=>increment($post["paid_amnt"]),
            'crs_name'=>$post["crs_name"],
            'ses_name'=>$post["ses_name"],
            'crs_start'=>$post["crs_start"],
            'crs_spr'=>$post["crs_spr"],
            'discount'=>$post["discount"],
            'next_amnt_alert'=>$post["next_amnt_alert"],
            //'unpaid_amnt'=> $post["unpaid_amnt"],
            
              
         );

     DB::table('students')->where('id', $post['id'])->increment('paid_amnt', $post["paid_amnt"]);
     //DB::table('students')->where('id', $post['id'])->decrement('unpaid_amnt', $post["paid_amnt"]);
     DB::table('students')->where('id', $post['id'])->update($data);   

     $result=DB::table('students')->find($post['id']);
     // return view('stdn\show_stdn')->with('data',$result);
     return view('stdn\show_stdn_details')->with('data',$result);
    }

    
    
}
