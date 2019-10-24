@extends('layouts.app2')

@section('content')

        <div class="col-md-8">
                <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <ul class="banner_slide_bg">
                            <li>
                                <div class="container-fluid">
                                    <div class="w3ls_banner_txt">
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Quality Orthodontic </span> Treatments.</h3>
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
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4"><span>We care about your</span> Teeth</h3>
                                        <p class="w3ls_pvt-title my-3">Onec Consequat Sapien Ut Leo Cursus Rhoncus. Nullam Dui Mi, Vulputate Ac 
                                        Metus Semper Nullam Dui Mi. Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Ultrices Posuere 
                                        Cubilia Curae.</p>
                                        <a href="about.html" class="btn btn-banner my-sm-3 mb-3">Read More</a>
                                        <a href="contact.html" class="btn btn-banner1 my-sm-3 mb-3">Consult a dentist</a>
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
    

@endsection
