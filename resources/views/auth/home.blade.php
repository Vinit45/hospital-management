@extends('layouts.app2')

@section('content')

<div class="row">
        <div class="col-lg-6">
                <div class="csslider infinity" id="slider1" style="margin-top: 40px">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <ul class="banner_slide_bg">
                            <li>
                                <div class="container-fluid">
                                    <div class="w3ls_banner_txt">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Want To Book an</span> Appointment</h3>
                                        <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                        Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                        Cubilia Curae.</p>
                                        <a href="/home/selectdoc" class="btn btn-banner1 my-sm-3 mb-3">Book Appointment Now</a>
                                        
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="container-fluid">
                                    <div class="w3ls_banner_txt">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Want To See Your</span> Prescriptions</h3>
                                        <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                        Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                        Cubilia Curae.</p>
                                        <a href="/home/prescriptions" class="btn btn-banner my-sm-3 mb-3">See</a>
                                    </div>
                                </div>
                            </li>
                            
                            
                        </ul>
                        <div class="navigation">
                            <div>
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>

                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-lg-6 col-md-8" style="margin-top: 100px">
            <img src="{{asset('/storage/banner.png')}}" alt="" class="img-fluid" width="100%" height="100%" />
        </div>
</div>
    

@endsection
