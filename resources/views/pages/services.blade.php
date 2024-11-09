@extends('layouts.web')
@section('title')
    Services
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/3.jpg') }}" style="margin-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Discover</h5>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{ URL::asset('hotel/img/restaurant/1.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>Tours and Safaris</h4>
                            <p>Discover the breathtaking beauty and diverse wildlife of Kenya with our expertly guided tours
                                and safaris. Our customized itineraries cater to all types of travelers, whether you're
                                seeking a thrilling adventure in the national parks, a serene beach getaway, or an immersive
                                cultural experience. Our experienced guides are passionate about sharing their knowledge and
                                ensuring you have an unforgettable journey. Embark on a memorable adventure with Venture
                                Africa Safaris Limited and create lasting memories.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Executive Car Hire</h4>
                            <p> Experience the luxury and comfort of our Executive Car Hire services. Whether you need a
                                vehicle for business travel, special events, or personal use, we offer a premium selection
                                of executive cars to meet your needs. All our vehicles are well-maintained, stylish, and
                                equipped with the latest amenities to ensure a smooth and enjoyable ride. Travel in style
                                and make a statement with Venture Africa Safaris Limited.</p>
                            <div class="butn-dark"> <a href="{{ route('comingsoon') }}"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="{{ route('comingsoon') }}"><img src="{{ URL::asset('hotel/img/rooms/16.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Airport transfers</h4>
                            <p>Start and end your journey smoothly with our reliable airport transfer services. We provide
                                timely and comfortable transportation to and from all major airports in Kenya. Whether
                                you're arriving or departing, our professional drivers will ensure you reach your
                                destination safely and on time. Avoid the hassle of navigating unfamiliar roads and let
                                Venture Africa Safaris Limited take care of your airport transfers, so you can focus on
                                enjoying your trip.</p>
                            <div class="butn-dark"> <a href="{{ route('services') }}"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{ URL::asset('hotel/img/spa/4.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
