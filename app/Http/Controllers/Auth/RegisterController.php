<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Doctor;
use App\doctorsData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:doctor');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showDoctorRegisterForm()
    {
        return view('Doctors.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function validateDoctor(array $data)
    {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone_no' => ['required','string'],
                'emp_id'=>['required','string'],
                // 'class_1' => ['required', 'string'],
                // 'class_2' => ['string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createDoctor(Request $request)
    {
        $masterList = doctorsData::where('email',$request->input('email'))->where('emp_id',$request->input('emp_id'))->first();
        if($masterList!=null)
        {
            $this->validateDoctor($request->all())->validate();
            $doctor = $this->createD([
                'Name' => $request['name'],
                'Email' => $request['email'],
                'password' =>$request['password'],
                'phone_no' =>$request['phone_no'],
                'role_id'=>$request['role_id'],
                'emp_id' =>$request['emp_id'],
            ]);
            return redirect()->intended('login/doctor')->with('success','You are Registered Successfully!');
        }
        else{
            return redirect('register/doctor')->with('error','Invalid Registration. Please visit the General Instructions section');
        }
    }
    protected function createD(array $data)
    {
        return Doctor::create([
            'name' => $data['Name'],
            'email' => $data['Email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'phone_no'=>$data['phone_no'],
            'emp_id'=>$data['emp_id'],
        ]);
    }
}
