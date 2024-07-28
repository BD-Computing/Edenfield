@extends('layouts.web')

@section('title')
    Services
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/3.jpg') }}">
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
                        <a href="{{ route('web.restaurant') }}"><img src="{{ URL::asset('hotel/img/restaurant/1.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>Savor exquisite culinary delights at our restaurant, where expert chefs craft a diverse
                                menu, blending international flavors with local ingredients for an unforgettable dining
                                experience.</p>
                            <div class="butn-dark"> <a href="{{ route('web.restaurant') }}"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Fitness Center</h4>
                            <p>Elevate your well-being at our state-of-the-art Fitness Center, equipped with cutting-edge
                                equipment and expert trainers, ensuring a revitalizing stay.</p>
                            <div class="butn-dark"> <a href="{{ route('web.comingsoon') }}"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="{{ route('web.comingsoon') }}"><img src="{{ URL::asset('hotel/img/spa/2.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="{{ route('web.comingsoon') }}"><img src="{{ URL::asset('hotel/img/spa/4.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>The Health Club</h4>
                            <p>The hotel's Health Club offers a haven of well-being, featuring modern fitness equipment,
                                rejuvenating spa services, and a tranquil ambiance for guests to nurture their physical and
                                mental health.</p>
                            <div class="butn-dark"> <a href="{{ route('web.comingsoon') }}"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Luxury Suites</h4>
                            <p> Our 22 units which include Luxury Suites offer a kingly and comfortable experience within a
                                peaceful and chilled neighbourhood.</p>
                            <p> TJ’s offers the perfect base for you while you are in Eldoret City for a Business, Workshop,
                                or
                                Family trip. Located only three minutes from the CBD.</p>
                            <div class="butn-dark"> <a href="{{ route('web.comingsoon') }}"><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="{{ route('web.comingsoon') }}"><img src="{{ URL::asset('hotel/img/rooms/16.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <div class="info">
                            <h6>Experiences</h6>
                        </div>
                        <h4>The Health Club</h4>
                        <p>The hotel's Health Club offers a haven of well-being, featuring modern fitness equipment,
                            rejuvenating spa services, and a tranquil ambiance for guests to nurture their physical and
                            mental health.</p>
                        <div class="butn-dark"> <a href="{{ route('web.spa') }}"><span>Learn More</span></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <a href="spa-wellness.html"><img src="{{ URL::asset('hotel/img/spa/4.jpg') }}"
                            alt=""></a>
                </div>
            </div>
        </div> --}}
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    @include('web.rooms.booking')
@endsection
