<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\ImgPrescription;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class DoctorsController extends Controller
{
    public function checkSchedule(){
        $profile= Auth::user();
        if($profile->emp_id==0){
            
            return view('Doctors.admincards');
        }
        else{
            $scheduledata = DB::table('users')
            // ->join('doctors', 'doctors.emp_id', '=', 'schedules.doctor_id')
            ->join('schedules', 'users.id', '=', 'schedules.patient_id')
            ->where('schedules.doctor_id', '=', $profile->emp_id)
            ->get();
// return $scheduledata;
// $scheduledata=DB::table('schedules')->where('doctor_id',$profile->emp_id)->get();
            return view('Doctors.dashboard')->with("scheduledata",$scheduledata);
        }
        

    }

    public function appointmentStatus(Request $request,$id,$profile_id){
        $profile= Auth::user();
        $date = Carbon::now();
        
        // $this->validate($request,[
        //     'prescription_img'=>'image'
        // ]);
        $new_prescription=new ImgPrescription;
        $new_prescription->doctor_id=$profile->emp_id;

        if($request->has('prescription_img')){
            $fileNameToStore=time().$request->file('prescription_img')->getClientOriginalName();
            $path=$request->file('prescription_img')->storeAs('public/prescription_img',$fileNameToStore);
            $new_prescription->img=$fileNameToStore;
        }
        $new_prescription->patient_id=$profile_id;
        $new_prescription->Date=$date->toDateString();
        $new_prescription->save();
        $sch=DB::update('update schedules set status = 0, patient_id=NULL where id = ?',[$id]);
        return redirect('/doctor')->with('success','Appointment Completed');


    }

    public function allappointments(){
        $doc = DB::table('schedules')
                ->join('users', 'users.id','=','schedules.patient_id')
                ->join('doctors', 'doctors.emp_id','=','schedules.doctor_id')
                ->select('schedules.id','users.name as Pname','users.email', 'doctors.name as Dname','schedules.timing_slot','schedules.doctor_id','schedules.patient_id')
                ->get();
        return view('Doctors.admin')->with("doc",$doc);
    }

    public function appointmentStatusbyadmin(Request $request,$id,$doctor_id){
        $data=array(
            'content' => $request->content
        );
        Mail::to($request->email)->send(new SendEmail($data));
  
        //   Mail::send('email-template', $data, function($message) use ($data) {
        //     $message->from(env('MAIL_USERNAME'),'Test'); 
        //     $message->to($data['email'])->subject($data['subject']);
        //   });
        $sch=DB::update('update schedules set status = 0, patient_id=NULL where id = ? and doctor_id=?',[$id,$doctor_id]);
        return redirect('/doctor/allappointments')->with('success','Appointment Deleted and Mail has been sent');
    }
}
