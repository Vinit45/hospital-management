@extends('layouts.app2')

@section('content')
<div class="container">
    <h2  style="margin-top:100px">All Apointments of all Doctors</h2>
    <hr style="border:2px solid #00bcd5;">
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered" style="margin-top:20px">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Doctor Name</th>
                    <th>Time Slot</th>
                    <th>Patient Name</th>
                    <th>Patient Email</th>
                    <th>Reason</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($doc as $d)
                    <form action="{{action('DoctorsController@appointmentStatusbyadmin',[$d->id,$d->doctor_id])}}" enctype="multipart/form-data" method="post">
                        @csrf 
                        <tr>
                            <td>{{$loop -> index+1 }}</td>
                            <td>{{$d->Dname }}</td>
                            <td>{{$d->timing_slot }}</td>
                            <td>{{$d->Pname}}</td>
                            <td><input type="text" name='email' class="form-control" value="{{$d->email}}"></td>
                            <td><textarea name="content" rows="3" class="form-control" placeholder="Enter Your Reason"></textarea></td>
                            <td><button type="submit" class="btn btn-danger" >Delete</button></td>
                                    
                        </tr>
                    </form>
                    @endforeach
                </tbody>
        </table>
        </div>


</div>

@endsection