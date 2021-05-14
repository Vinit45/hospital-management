<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Doctor;
use App\ImgPrescription;
use Validator;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function history()
    {
    //  $data=User::where('id',$request->route('id'))->first();
        $profile= Auth::user();
        $data=DB::table('img_prescriptions')
        ->join('doctors', 'doctors.emp_id', '=', 'img_prescriptions.doctor_id')
        ->where('img_prescriptions.patient_id', '=', $profile->id)
        ->get();



        return view('auth.prescription')->with('data',$data);
    }

    
}
