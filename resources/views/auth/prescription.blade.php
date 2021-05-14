@extends('layouts.app2')
<style>
    td{
        text-align: center;
    }
</style>
@section('content')
<div class="container">
    <h2  style="margin-top:100px">Your Prescriptions</h2>
    <hr style="border:2px solid #00bcd5;">
    <div id="doctorData">
    <div class="row" style="margin-top:20px">
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Doctor's Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Date</th>
                    <th>Prescription Image</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)      
                        <tr>
                            <td>{{$loop -> index+1 }}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->phone_no}}</td>
                            <td>{{$d->Date}}</td>
                            <td><a href="{{ url('storage/prescription_img/'.$d->img) }}"><img src="{{ url('storage/prescription_img/'.$d->img) }}" alt="" title=""   height="100px"/></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    </div>
    </div>


</div>

@endsection