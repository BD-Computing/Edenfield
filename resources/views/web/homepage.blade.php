@extends('layouts.web')

@section('title')
    Homepage
@endsection
@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            @foreach ($landingImages['images'] as $index => $landing)
                @if ($landingImages['fromDB'] == true)
                    <div class="text-center item bg-img" data-overlay-dark="2"
                        data-background="{{ url($landing['imageLink']) }}">
                    @else
                        <div class="text-center item bg-img" data-overlay-dark="2"
                            data-background="{{ URL::asset($landing['imageLink']) }}">
                @endif

                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                @include('layouts.partials.stars')
                                <h4>{{ $landing['title'] }}</h4>
                                <h1>{{ $landing['description'] }}</h1>
                                <div class="butn-light mt-30 mb-30"> <a href="{{ route('web.rooms') }}"
                                        data-scroll-nav="1"><span>Rooms &
                                            Suites</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        </div>
        <!-- slider reservation -->
        <div class="reservation">
            <a href="tel:+{!! $settings->salesPhoneNumber !!}">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call" style="color: #fff;"><span style="color: #fff;">+{!! $settings->salesPhoneNumber !!}</span>
                    <br>Reservation
                </div>
            </a>
        </div>
    </header>
    <style>
        .writeup {
            background-color: #fff;
            padding: 8px 20px;
            border-radius: 4px;
        }

        .center {
            display: block;
        }

        @media screen and (max-width: 768px) {
            .center {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .booking-wrapper {}

            form {
                /* width: 90vw; */
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .book-row {
                display: grid;
                grid-template-columns: 1fr;
                align-items: center;
            }

            .book-row>div {
                width: initial !important;
            }

            .btn-form1-submit {
                width: 60vw !important;
            }
        }
    </style>

    <!-- Booking Search -->
    <div class="booking-wrapper">
        <div class="container">
            <div class="booking-inner clearfix">

                <form class="form1 clearfix">
                    <div class="row book-row">
                        <div class="col-6 center writeup">
                            <p>
                                Check our rooms on Booking.com
                            </p>
                        </div>
                        <div class="col-3 center">
                            <style>
                                .book {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .book:hover {
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }
                            </style>
                            <a class="btn-form1-submit book" href="{{ $settings->bookingComLink }}" target="_blank">Book
                                Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    @include('layouts.partials.stars')
                    <div class="section-subtitle">TJ's Boutique Hotel</div>
                    <div class="section-title">Stay Once Carry Memories</div>
                    <p>We take pride in our modern luxury hotel which offers exquisite facilities with a touch of class.
                    </p>

                    <p>We offer a diverse and luxurious environment that suits the tastes of our esteemed customers in every
                        occasion.
                    </p>
                    <!-- call -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a> <br>
                            <a href="tel:{!! $settings->phone !!}">{!! $settings->phone !!}</a>
                        </div>
                    </div>
                </div>
                <style>
                    .images {
                        display: grid;
                        grid-auto-columns: 1fr;
                        grid-gap: 20px;
                    }
                </style>
                <div class="col-6 images">
                    <div class="row ">
                        <div class="col-6">
                            <img src="{{ URL::asset('hotel/img/rooms/8.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{ URL::asset('hotel/img/rooms/22.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-6">
                            <img src="{{ URL::asset('hotel/img/rooms/23.jpg') }}" alt="">
                        </div>
                        <div class="col-6" style="height: 100%">
                            <img src="{{ URL::asset('hotel/img/rooms/24.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">{!! Str::upper($settings->companyName) !!}</div>
                    <div class="section-title">Rooms & Suites</div>
                </div>
            </div>
            <div class="row">
                @foreach ($roomTypes as $index => $roomType)
                    @if ($index + 1 < 4)
                        <div class="col-md-4">
                        @else
                            <div class="col-md-6">
                    @endif
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ URL::asset($roomType->mainImage) }}"
                                alt="">
                        </div> <span class="category"><a
                                href="{{ route('web.room-details', ['id' => $roomType->id]) }}">Book</a></span>
                        <div class="con">
                            <h6><a href="{{ route('web.room-details', ['id' => $roomType->id]) }}">From @money($roomType->price)
                                    /
                                    Night</a></h6>
                            <h5><a
                                    href="{{ route('web.room-details', ['id' => $roomType->id]) }}">{!! $roomType->roomType !!}</a>
                            </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                                <div class="col col-md-5 text-end">
                                    <div class="permalink"><a
                                            href="{{ route('web.room-details', ['id' => $roomType->id]) }}">Details <i
                                                class="ti-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- Pricing -->
    @include('web.extraservices')

    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3"
        data-background="{{ URL::asset('hotel/img/rooms/21.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    @include('layouts.partials.stars')
                    <div class="section-subtitle"><span>TJ's Boutique Hotel</span></div>
                    <div class="section-title"><span>Promotional Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" target="blank" href="https://youtu.be/S3BaKbvfIu8?si=mxncKjAKceNDcGLF">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Pick Up & Drop</h5>
                        <p>Our hotel offers seamless pick-up and drop-off services, ensuring your journey to and from our
                            property is stress-free and convenient.</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Parking Space</h5>

                        <p>Our hotel provides ample and secure parking space, ensuring hassle-free convenience for our
                            guests during their stay with us.</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Room Service</h5>
                        <p>Indulge in our impeccable room service, offering a delectable array of dishes delivered to your
                            door for a memorable stay.</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Swimming Pool</h5>
                        <p>Dive into pure relaxation at our inviting swimming pool, a tranquil oasis for guests to unwind
                            and soak up the sun.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Fibre Internet</h5>
                        <p>Experience lightning-fast Fibre Internet at our hotel, ensuring seamless connectivity for your
                            work and leisure needs during your stay.</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Breakfast</h5>
                        <p>Indulge in our sumptuous breakfast spread, featuring a variety of fresh and flavorful options to
                            kickstart your day with delight.</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @include('web.testimonials')
    {{--
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="{{ route('web.restaurant') }}"><img
                                src="{{ URL::asset('hotel/img/restaurant/1.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>Enjoy the serenity at our restaurant, located at the rooftop. Also, you will enjoy the
                                beauty of the City of Champions from above. The beautiful view of the city offers
                                tranquility during the day and at night.</p>
                            <div class="butn-dark"> <a href="{{ route('web.restaurant') }}"><span>Learn More</span></a>
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
                                <h6>Health</h6>
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
            </div>
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
        </div>
    </section> --}}
    <!-- News -->
    {{-- <section class="news section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Hotel Blog</span></div>
                    <div class="section-title"><span>Our News</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ URL::asset('hotel/img/news/3.jpg') }}"
                                    alt="">
                                <div class="date">
                                    <a href="{{ route('web.comingsoon') }}"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('web.comingsoon') }}">Bathrooms</a>
                                </span>
                                <h5><a href="{{ route('web.comingsoon') }}">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>


                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ URL::asset('hotel/img/news/1.jpg') }}"
                                    alt="">
                                <div class="date">
                                    <a href="{{ route('web.comingsoon') }}"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('web.comingsoon') }}">Design</a>
                                </span>
                                <h5><a href="{{ route('web.comingsoon') }}">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ URL::asset('hotel/img/rooms/21.jpg') }}" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p> @include('layouts.partials.stars')</p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                            breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1"
                                    href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a> <br>
                                <a class="color-1" href="tel:{!! $settings->phone !!}">{!! $settings->phone !!}</a>
                            </div>
                        </div>
                        <!-- <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p> -->
                    </div>
                    <!-- Booking From -->
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    {{-- <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/1.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/2.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/3.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/4.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/5.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ URL::asset('hotel/img/clients/6.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
