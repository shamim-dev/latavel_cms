<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\student;
use DB;
use Session;


class studenController extends Controller
{


    public function dashboard()
    {

          


          $date=date('Y-m-d');

      $duestdn=DB::table('students')->where([
              ['next_amnt_alert', '<', $date],
              ['unpaid_amnt', '>', 0],])->get();


      $xprD=DB::table('students')->where([
              ['next_amnt_alert','=',$date],
              ['unpaid_amnt', '>', 0],])->get();
      //$duestdn=DB::table('students')->where('next_amnt_alert', '>', $date)->get();
      $xprStdn=DB::table('students')->where('crs_spr', '<', $date)->get();

      $d=count($duestdn);
      session()->put('ds',  $d);

      $ti=count($xprD);
      session()->put('ti',  $ti);
     
     

      $ta=$ti+$d;
      session()->put('ta',  $ta);
      //----------------------------------------------



        $t = DB::table('students')->count();

        $t14 = DB::table('students')
        ->whereBetween('year', ['2010', '2014'])
        ->count();

        $t15 = DB::table('students')
        ->where('year', '2015')
        ->count();
                
       $t16 = DB::table('students')
        ->where('year', '2016')
        ->count();

        $t17 = DB::table('students')
        ->where('year', '2017')
        ->count();

      session()->put('ket',  $t);

              return view('home')
                 ->with('total',$t)
                 ->with('t14',$t14)
                 ->with('t15',$t15)
                 ->with('t16',$t16)
                 ->with('t17',$t17);


    }



    
    public function index()
    {
        $crs=DB::table('course')->get();
        $ses=DB::table('session_tbl')->get();

       return view('add_stdn')
         ->with('crs',$crs)
         ->with('ses',$ses);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

      /*  $this->validate($request, [
        'name' => 'required',
        'f_name' => 'required'
    ]);*/
        student::create(Request::all());
          

     Session::flash('flash_message', 'Data successfully added!');
        
        return redirect()->back();  
    }


    public function show()
    {
        //$result=student::all();
        //return view('stdn\show_stdn',['data'=>$result]);

      $result=DB::table('students')->get();
      return view('stdn\show_stdn')->with('data',$result);
    }

    public function edit($id)
    { 
        $crs=DB::table('course')->get();
        $ses=DB::table('session_tbl')->get();
        //$data=App\student::find($id);
        //$data=student::find(Request::all($id));
        $data=DB::table('students')->find($id);

        return view('edit_stdn')->with('crs',$crs)
         ->with('ses',$ses)->with('stdn',$data);
       
    }


    public function delete($id)
    {
       DB::table('students')->where('id',$id)->delete();
       Session::flash('flash_message', 'Data successfully Deleted!');
       return redirect()->back();
       
    }

    public function delete2($id)
    {
       DB::table('students')->where('id',$id)->delete();
       Session::flash('flash_message', 'Data successfully Deleted!');
       return view('stdn\show_stdn_blank');
       
       
    }

    
    public function update(Request $request)
    {
       $post=$request->all();
        $data=array(
            
            
            'name'=>$post["name"]
              
         );
     $success=DB::table('students')->where('id', $post['id'])->update($data);    
     /*if($success){
      return redirect()->back();
        //echo "ok";*/
    }

    // Alert ----------------------------------------------------------
     public function alert()
    {
        //$result=student::all();
        //return view('stdn\show_stdn',['data'=>$result]);
        $date=date('Y-m-d');

      $duestdn=DB::table('students')->where([
              ['next_amnt_alert', '<', $date],
              ['unpaid_amnt', '>', 0],])->get();


      $xprD=DB::table('students')->where([
              ['next_amnt_alert','=',$date],
              ['unpaid_amnt', '>', 0],])->get();
      //$duestdn=DB::table('students')->where('next_amnt_alert', '>', $date)->get();
      $xprStdn=DB::table('students')->where('crs_spr', '<', $date)->get();

      $d=count($duestdn);
      session()->put('ds',  $d);

      $ti=count($xprD);
      session()->put('ti',  $ti);
     
     

      $ta=$ti+$d;
      session()->put('ta',  $ta);
     

    


      

      //print_r($duestdn);
      return view('alert/alert')
                      ->with('data',$xprD)
                      ->with('duestdn',$duestdn)
                      ->with('xprStdn',$xprStdn);
    }

    public function destroy($id)
    {
        //
    }
}
