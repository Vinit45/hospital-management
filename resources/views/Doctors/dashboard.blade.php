@extends('layouts.app2')

@section('content')

<div class="container">
    <h2  style="margin-top:100px">Your Appointments</h2>
    <hr style="border:2px solid #00bcd5;">
    <div id="doctorData">
    <div class="row" style="margin-top:20px">
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Patient's Name</th>
                    <th>E-mail</th>
                    <th>Contact no</th>
                    <th>Timing Slot</th>
                    <th>Add Prescription</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($scheduledata as $sd)      
                    <form action="{{action('DoctorsController@appointmentStatus',[$sd->id,$sd->patient_id])}}" enctype="multipart/form-data" method="post">
                        @csrf             
                        <tr>
                            <td>{{$loop -> index+1 }}</td>
                            <td>{{$sd->name}}</td>
                            <td>{{$sd->email}}</td>
                            <td>{{$sd->phone_no}}</td>
                            <td>{{$sd->timing_slot}}</td>
                            <td><input type="file" id="prescription_img" name="prescription_img"></td>
                            <td><button type="submit" class="btn btn-warning">Done</button></td>

                        </tr>
                    </form> 
                    @endforeach
                </tbody>
        </table>
    </div>
    </div>
    </div>


</div>

@endsection