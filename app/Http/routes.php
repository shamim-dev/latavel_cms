<?php

Route::get('/', 'Adminauth\AuthController@showLoginForm');
Route::post('login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],function(){
	Route::get('/dashboard','Admin\AdminController@dashboard');
	Route::get('/logout','Adminauth\AuthController@logout');
});


/*Route::get('/create',function(){
	App\User::create([
          'name'=> 'AR Shamim',
          'username'=> 'admin',
          'email' => 'admin@yahoo.com',
          'password'=> bcrypt('shamim'),
		]);
});
*/

//dashboard------------------------------------------------------------------------------------


Route::get('/dashboard','studenController@dashboard');
/*Route::get('/dashboard',function(){
	return view('home');
});*/


// Form open --------------------------------------------------------------------
Route::get('/dashboard/stdn_form','studenController@index');

// IF Save Record--------------------------------------------------------------------------
Route::post('/dashboard/store','studenController@store');


//Stdn List------------------------------------------------------------------------
// 1)->  using only route -to Model
		/*Route::get('/dashboard/stdn_show',function(){
			     $data=App\student::all();
			      return view('stdn\show_stdn')->with('data',$data);
		});*/
		
// 2)->using only route, controller and  Model
      Route::get('/dashboard/stdn_show','studenController@show');
      Route::get('/dashboard/stdn_show2','studenController@show');

//Stdn details------------------------------------------------------------------------
Route::get('/dashboard/stdn_details/{id}',function($id){
	     $data=App\student::find($id);
        return view('stdn\show_stdn_details')->with('data',$data);
});

//Stdn edit------------------------------------------------------------------------
Route::get('/dashboard/edit_stdn/{id}','studenController@edit');
//Route::get('/dashboard/stdn_details/edit_stdn/{id}','studenController@edit');

// IF update Record--------------------------------------------------------------------------
Route::post('/dashboard/update','studeneditController@update');
	     

// IF Delete Record--------------------------------------------------------------------------
Route::get('/dashboard/stdn_delete/{id}','studenController@delete');
Route::get('/dashboard/stdn_details/stdn_delete/{id}','studenController@delete2');

// If Under constraction---------------------------------------------------------------
Route::get('/dashboard/under_constraction',function(){
	return view('under_constraction');
});

// alert---------------------------------------------------------------
Route::get('/dashboard/alert','studenController@alert');

// due stdn---------------------------------------------------------------
Route::get('/dashboard/duestdn','studenController@duestdn');

// adminsettings---------------------------------------------------------------
Route::get('/dashboard/...',function(){
	return view('');
});




