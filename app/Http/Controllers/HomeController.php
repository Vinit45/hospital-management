<?php

namespace App\Http\Controllers;
use DB;
use App\Doctor;
use App\User;
use App\Roles;
use App\Application;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function selectCatagory()
    {
        $profile= Auth::user();   
        $roles = DB::table('roles')
                    ->get();            
        return view('auth.bookAppointment',compact('profile','roles'));
    }
    public function docCategory(Request $request){
        $cat_id=$request->cat_id;
        $data=DB::table('doctors')
        ->join('schedules','doctors.emp_id','schedules.doctor_id')
        ->where('doctors.role_id',$cat_id)->get();
        return view('auth.alldocs',['data'=>$data]);
    }
    public function book($id){
        $user=Auth::User();
        $sch=DB::update('update schedules set status = 1, patient_id=? where id = ?',[$user->id,$id]);
        // $sch->save();
        // $sch=DB::table('schedules')->where('id',$id)->get();
        // $sch->update('status',1);
        // $sch->save();
        return redirect('/home')->with('success','Appointment Booked Successfully');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function consult()
    {
        return view('auth.application');
    }
    public function index()
    {
        return view('home');
    }
    public function storeApplication(Request $request)
    {
            $this->validate($request,[
                'certificate' => 'image|max:1999',
                'reason' =>['string','required'],
            ]);
            $patient = Auth::user();
            // $teacher = $student->division_class->divisions;
            // return $teacher;
            // $record =   InternalTest::where('student_id',$student->id)->where('subject_id',$request->session()->get('subject_id','Error'))->first();
            // $teacher_id = DivisionTeacher::where('division_id',$student->division)->where('subject_id',$request->session()->get('subject_id','Error'))->first()->value('teacher_id'); 
            // if($record['ia1'] == -2 && $record['ia2'] == -2 )
            // {
            //     $ans = 3;
            // }
            // elseif($record['ia1'] == -2)
            // {
            //     $ans = 1;
            // }
            // elseif($record['ia2'] == -2)
            // {
            //     $ans = 2;
            // }
            // Get filename with the extension
            $filenameWithExt = $request->file('certificate')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('certificate')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('certificate')->storeAs('public/certificate', $fileNameToStore);
            Application::create(
                [
                    'reason' => $request['reason'],
                    'certificate' => $fileNameToStore,
                    
                ]
            );
            // $request->session()->forget('subject_id');
            return redirect('home');
    }
}
