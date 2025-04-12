@extends('app')

@section('slider')
    <!-- slider section -->
    <section class="slider_section">
        <div class="side-img">
            <img src="{{asset('images/side-img.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>HIMALIX</h2>
                        <h1><span>Shilajit</span></h1>
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img-box">
                                    <img src="{{asset('images/product/main-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-box">
                                    <img src="{{asset('images/product/main-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-box">
                                    <img src="{{asset('images/product/main-1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="carousel_btn-container">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
@endsection

@section('content')

    <!-- product section -->

    @include('sections.product')

    <!-- end product section -->

    <!-- about section -->

    @include('sections.about')

    <!-- end about section -->

    <!-- us section -->

    <section class="us_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{{asset('images/product/prod-6.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Why Choose us</h2>
                        </div>
                        <div class="box">
                            <div class="text-box">
                                <div class="number-box">
                                    <h5>01</h5>
                                </div>
                                <h6>Himalayan Shilajit boosts fertility, energy, libido, and supports detox.</h6>
                            </div>
                            <div class="text-box">
                                <div class="number-box">
                                    <h5>02</h5>
                                </div>
                                <h6>Shilajit supports heart health, with protective effects noted in studies.</h6>
                            </div>
                            <div class="text-box">
                                <div class="number-box">
                                    <h5>03</h5>
                                </div>
                                <h6>Shilajit clears toxins and boosts skin glow.</h6>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->

    <!-- store section -->

    <section class="store_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>The Best Himalix Store</h2>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="img-box">
                            <img src="{{asset('images/slider-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>It is a long established fact that a reader will be distracted </h5> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="img-box">
                            <img src="{{asset('images/slider-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>It is a long established fact that a reader will be distracted </h5> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="img-box">
                            <img src="{{asset('images/slider-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>It is a long established fact that a reader will be distracted </h5> --}}
                    </div>
                </div>
            </div>
            <div class="carousel_btn-container">
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- end store section -->

    {{-- <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2 class="text-white">Our Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('images/b-1.jpg')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>New HIMALIX Products</h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{asset('images/b-2.jpg')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>New HIMALIX Products</h3>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end blog section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>Hingaroo</h5>
                                <h6>Dealer</h6>
                                <p>
                                    Potential Clients are pouring our website on a daily basis after we use Organic
                                    Visit, really recommended their great job!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>Hingaroo</h5>
                                <h6>Dealer</h6>
                                <p>
                                    Potential Clients are pouring our website on a daily basis after we use Organic
                                    Visit, really recommended their great job!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>Hingaroo</h5>
                                <h6>Dealer</h6>
                                <p>
                                    Potential Clients are pouring our website on a daily basis after we use Organic
                                    Visit, really recommended their great job!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>


    <!-- end client section --> --}}


    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container ">
            <h2 class="">Request A Call Back</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <form action="">
                        <div>
                            <input type="text" placeholder="Name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <button>SEND</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- end contact section -->

@endsection