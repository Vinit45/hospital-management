<?php

namespace App\Http\Controllers;
use DB;
use App\Doctor;
use App\User;
use App\Roles;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDoctor()
    {
        $profile= Auth::user();
        $roles = DB::table('roles')
                    ->where('id', '=', $profile->role_id)
                    ->get();
                    
        return view('Doctors.profileupdate',compact('profile','roles'));
    }
    public function indexPatients()
    {
        $profile= Auth::user();               
        return view('patientprofileupdate',compact('profile'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDetails(Request $request)
    {
        $user = auth::user();
        $doc = Doctor::find($user->id);
        $doc->name = $request['name'];
        $doc->phone_no = $request['phone_no'];
        $doc->save();
        return redirect("doctor");
    }
    public function updatePatients(Request $request)
    {
        $user1 = auth::user();
        $user = User::find($user1->id);
        $user->name = $request['name'];
        $user->phone_no = $request['phone_no'];
        $user->save();
        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
