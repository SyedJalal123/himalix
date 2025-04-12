<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">

    <title>Himalix</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
</head>

<body @if(!request()->is('/')) class="sub_page" @endif>

    <div class="hero_area">
        @if(request()->is('/'))
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img class="image" src="{{asset('images/logo.png')}}">
                        </a>
                        <div class="" id="">
                            <div class="User_option">
                                <form class="form-inline my-2  mb-3 mb-lg-0">
                                    <input type="search" placeholder="Search">
                                    <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
                                </form>
                                <a href="">
                                    <img src="{{asset('images/bag.png')}}" alt="">
                                </a>
                            </div>

                            <div class="custom_menu-btn">
                                <button onclick="openNav()">
                                    <span class="s-1"></span>
                                    <span class="s-2"></span>
                                    <span class="s-3"></span>
                                </button>
                            </div>
                            <div id="myNav" class="overlay">
                                <div class="overlay-content">
                                    <a href="{{url('/')}}">Home</a>
                                    <a href="{{url('about')}}">About</a>
                                    <a href="{{url('catalog')}}">Products</a>
                                    {{-- <a href="{{url('blog')}}">Blog</a> --}}
                                    <a href="{{url('contact')}}">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            @yield('slider')
        @else
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <span class="text-black-50">HIMALIX</span>
                        </a>
                        <div class="" id="">
                            <div class="User_option">
                                <form class="form-inline my-2  mb-3 mb-lg-0">
                                    <input type="search" placeholder="Search">
                                    <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
                                </form>
                                <a href="">
                                    <img src="images/bag.png" alt="">
                                </a>
                            </div>
                
                            <div class="custom_menu-btn">
                                <button onclick="openNav()">
                                    <span class="s-1"></span>
                                    <span class="s-2"></span>
                                    <span class="s-3"></span>
                                </button>
                            </div>
                            <div id="myNav" class="overlay">
                                <div class="overlay-content">
                                    <a href="{{asset('/')}}">Home</a>
                                    <a href="{{asset('about')}}">About</a>
                                    <a href="{{asset('catalog')}}">Products</a>
                                    {{-- <a href="{{asset('blog')}}">Blog</a> --}}
                                    <a href="{{asset('contact')}}">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
        @endif
    </div>


    @yield('content')

    <!-- subscribe section -->

    <section class="subscribe_section mt-5 mb-5">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <h2 class="text-white">Newsletter</h2>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <form action="">
                            <input type="text" placeholder="Enter your email">
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end subscribe section -->



    <!-- info section -->

    <section class="info_section layout_padding">
        <div class="container">
            <div class="info_social-container">
                <h5>
                    Follow Us
                </h5>
                <div class="info_social">
                    <div>
                        <a href="">
                            <img src="{{asset('images/facebook-logo-button.png')}}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{asset('images/twitter-logo-button.png')}}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{asset('images/linkedin.png')}}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{asset('images/instagram.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h6>
                        About HIMALIX
                    </h6>
                    <p>
                        Our Shilajit is ISO and GMP certified, lab-tested by Eurofins, PCSIR, 
                        and a US lab to ensure maximum purity, safety, and effectiveness.
                    </p>
                </div>
                <div class="col-md-2 offset-lg-1">
                    <h6>
                        Menus
                    </h6>
                    <ul>
                        <li class=" active">
                            <a class="" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="">
                            <a class="" href="{{url('about')}}">About </a>
                        </li>
                        <li class="">
                            <a class="" href="{{url('catalog')}}">Products </a>
                        </li>
                        {{-- <li class="">
                            <a class="" href="{{url('blog')}}">Blog </a>
                        </li> --}}
                        <li class="">
                            <a class="" href="{{url('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Useful Links</h6>
                    <ul>
                        <li class="">
                            <a class="" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="">
                            <a class="" href="{{url('about')}}">About </a>
                        </li>
                        <li class="">
                            <a class="" href="{{url('catalog')}}">Products </a>
                        </li>
                        {{-- <li class="">
                            <a class="" href="{{url('blog')}}">Blog </a>
                        </li> --}}
                        <li class="">
                            <a class="" href="{{url('contact')}}">Contact Us</a>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h6>
                        Contact Us
                    </h6>
                    <div class="info_link-box">
                        <a href="">
                            <img src="{{asset('images/location-white.png')}}" alt="">
                            <span> D-11, Masood Arcade, Rawalpindi</span>
                        </a>
                        <a href="">
                            <img src="{{asset('images/call-white.png')}}" alt="">
                            <span>+01 12345678901</span>
                        </a>
                        <a href="">
                            <img src="{{asset('images/mail-white.png')}}" alt="">
                            <span> demo123@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved
            </p>
        </div>
    </section>
    <!-- end  footer section -->


    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>



</body>

</html>
