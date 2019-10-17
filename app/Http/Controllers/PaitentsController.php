<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PaitentsController extends Controller
{
    public function docCategory(Request $request){
        $cat_id=$request->cat_id;
        $data=DB::table('schedules')
        ->join('doctors','doctors.emp_id','schedules.doctor_id')
        ->where('schedules.doctor_id',$cat_id)->get();
        return $data;
    }
    
}
