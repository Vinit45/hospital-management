@extends('layouts.app2')

@section('content')
<div class="container">
    <h2  style="margin-top:100px">Admin Dashboard</h2>
    <hr style="border:2px solid #00bcd5;">
    {{-- <div class="card w-50" style="margin-top:100px;background-color:#f25f55;color:white">
        <div class="card-body">
          <h5 class="card-title">Delete an Appointment</h5>
          <p class="card-text" style="color: white">Manage appointments in case doctor is not available.</p>
          <a href="/doctor/allappointments" class="btn" style="background-color: #9c150b">Click Here</a>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-xl-4 col-sm-12 mb-3" >
            <div class="card text-white  o-hidden h-100" style="background-color: rgba(248, 56, 23, 0.863)">
                <div class="card-body">
                <div class="card-body-icon">
                <i class="fas fa-trash-alt" style="font-size:48px;color: rgb(255, 254, 254)"></i>
                </div>
                <div class="mr-3" style="font-size:20px; color: rgb(255, 254, 254)"><br>Want To Delete Appointment</div>
                </div>

                <a class="card-footer text-white clearfix small z-1" href="/doctor/allappointments">
                    <span class="float-left" style="font-size:17px; color: rgb(255, 254, 254);">Click Here <span class="fa fa-arrow-circle-right"></span></span>
                </a>
            </div>
        </div>
      </div>
</div>

@endsection