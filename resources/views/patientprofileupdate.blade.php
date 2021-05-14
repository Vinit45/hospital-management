@extends('layouts.app2')
<style>
    body{
    background: -webkit-linear-gradient(left, #00bcd5, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    position: relative;
    text-align: center;
    right: 0;
}
.profile-img img{
    position: relative;

    width: 50%;
    height: 50%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    color:#ffff;
    background: #212529b8;
}
.profile-img .file:hover {
    background:#00bcd5 ;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h3{
    color: #333;
}
.profile-head h6{
    color: #00bcd5;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    margin-left: 45%;
    margin-top: 12%;
    font-weight: 600;
    color: #00bcd5;
    cursor: pointer;
}
.profile-edit-btn:hover{
    color:whitesmoke;
    background-color: #00bcd5;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:3%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #00bcd5;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #00bcd5;
}

</style>
@section('content')
<div class="container emp-profile" style="margin-top: 70px">
    <form method="post">
        <div class="row">
            <div class="col-md">
                    <div class="profile-head">
                            <h3>
                                {{$profile->name}}
                            </h3>
                            <h6>
                                Patient
                            </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
                
            </div>
                
            
        </div>
        <div class="row m-0">
            <div class="col-md-8">
            <form method = "POST" action ="/home/profile/{{$profile->id}}" >
                @csrf
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">     
                            <div class="row">
                                    <div class="col-md-6">
                                        <label>Patient Id</label>
                                    </div>
                                    <div class="col-md-6">
                                            <input id="emp" type="text" disabled class="form-control @error('email') is-invalid @enderror" name="emp" value="{{ $profile->id  }}" required autocomplete="emp">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $profile->name }}" required autocomplete="name" autofocus>
                                        {{-- <p>{{$profile->name}}</p> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <input id="email" type="email" disabled class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $profile->email  }}" required autocomplete="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{$profile->phone_no }}" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Update Profile"/>
                            
                                </div>
                                
                    </div>
                                
                                
                                
                                
                
                                    
                                   
            
                                   
                    </div>
                </form>
            </div>
        </div>
    </form>           
</div>
@endsection