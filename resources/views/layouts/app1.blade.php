<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://kit.fontawesome.com/ee8f29eb14.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/css_slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    </head>
    <style>
        @media (max-width: 480px) {
            .login-icon {
                display: none;
            }
            .dental{
                display: none;
            }
        }
        @media(min-width: 900px)
        {
            .login-icondes{
                display:none;
            }
        }
    </style>
    
    <body>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <ul class="d-lg-flex header-w3_pvt" style="margin-top: 12px">
                            <li class="mr-lg-3">
                                <span class="fa fa-envelope-open"></span>
                                <a href="mailto:info@example.com" class="">info@example.com</a>
                            </li>
                            <li>
                                <span class="fa fa-phone"></span>
                                <p class="d-inline">Call Us +12 345 678</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-7 header-right-w3_pvt">
                        <ul class="d-lg-flex header-w3_pvt justify-content-lg-end" style="margin-top: 12px">
                            <li class="mr-lg-3">
                                <span class=""><span class="fa fa-clock"></span>Mon - Fri : 8:30am to 9:30pm</span>
                            </li>
                            <li class="">
                                <span class=""><span class="fa fa-clock"></span>Sat & Sun : 9:00am to 6:00pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //top header -->
        
        <!-- //header -->
        <header class="py-3">
            <div class="container">
                    <div id="logo">
                        <h1> <a href="/"><span class="fa fa-stethoscope" aria-hidden="true"></span> Dental Health</a></h1>
                    </div>
                <!-- nav -->
                <nav class="d-lg-flex">
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="/">Home</a></li>
                            <li class=""><a href="/aboutus">About Us</a></li>
                            <li class=""><a href="/services">Services</a></li>
                            {{-- <li class=""><a href="blog.html">Blog</a></li> --}}
                            <li class=""><a href="/contactus">Contact Us</a></li>
                            <li class="login-icondes"><a  href="/login">Patient Portal</a></li>
                            <li class="login-icondes"><a  href="/login/doctor">Doctors Portal</a></li>
                    </ul>
                    <div class="login-icon ml-2">
                        <a class="user" href="/login">Patient Portal</a>
                    </div>
                    <div class="login-icon ml-2">
                        <a class="user" href="/login/doctor">Doctors Portal</a> 
                    </div>
                </nav>
                <div class="clear"></div>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        @include('inc.messages')
        @yield('content')
        
    </body>