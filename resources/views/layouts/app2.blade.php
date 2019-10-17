<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ee8f29eb14.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/css_slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    </head>
    
    <body>
        <div class="header-top">
            
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="d-lg-flex header-w3_pvt">
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
                    <div class="col-sm-6 header-right-w3_pvt">
                        <ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
                            <li class="mr-lg-3">
                                <span class=""><span class="fa fa-clock-o"></span>Mon - Fri : 8:30am to 9:30pm</span>
                            </li>
                            <li class="">
                                <span class=""><span class="fa fa-clock-o"></span>Sat & Sun : 9:00am to 6:00pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            
        </div>
        <!-- //top header -->
        
        <!-- //header -->
        <header class="py-3">
            <div class="container">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="fa fa-stethoscope" aria-hidden="true"></span> Dental Health</a></h1>
                    </div>
                <!-- nav -->
                <nav class="d-lg-flex">
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    @guest
                    <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="/">Home</a></li>
                            <li class=""><a href="about.html">About Us</a></li>
                            <li class=""><a href="services.html">Services</a></li>
                            <li class=""><a href="gallery.html">Gallery</a></li>
                            <li class=""><a href="blog.html">Blog</a></li>
                            <li class=""><a href="contact.html">Contact Us</a></li>
                    </ul>
                    @else
                    <ul class="menu mt-2 ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        @if(Auth::guard('doctor')->check())
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="/doctor/updateprofile">
                             {{ __('Edit Profile') }}
                            </a>
                     @else
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="/home/profile">
                                {{ __('Edit Profile') }}
                        </a>
                    @endif
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                        </div>
                    </li>
                </ul>
                @endguest
                </nav>
                <div class="clear"></div>
                <!-- //nav -->
            </div>
        </header>
        @include('inc.messages')
        @yield('content')
        
    </body>