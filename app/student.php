<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   //protected $table = 'students';
   protected $fillable = [
						   'name',
						   'f_name',
						   'm_name', 
						   'email', 
						   'mobile',
						   'address',
						   'gender',
						   'institution',
						   'paid_amnt',
						   'unpaid_amnt',
						   'crs_name',
						   'ses_name',
						   'crs_start',
						   'next_amnt_alert',
						   'crs_spr',
						   'year',
						   'discount',
						   'crs_duration',
						   'fees'
					   ];
   
}
