@extends('layouts.web')

@section('title')
    About Us
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Luxury Hotel</h5>
                    <h1>About Us</h1>
                </div>
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
                    <p>
                        TJ’s is conveniently located just 3 minutes from the Eldoret City’s business District and
                        approximately 15 minutes from the airport. We are passionately dedicated to providing an exceptional
                        living experience in the City of Champions. Our unwavering
                        commitment to your comfort and safety during your stay is our top priority.<br>Presently, we offer
                        more than 22 spacious units with well-ventilated reception areas, comfortable
                        and stylish seating, exquisite lighting, refined decor, and luxurious finishes which ensure that
                        every
                        moment of our esteemed guests stay is unforgettable. </p>
                    <p>
                        Our distinctive design features exquisite and opulent finishes, cultured flooring, and unique
                        vegetative walls that reflect our identity and values. The spacious, well-ventilated lobby,
                        exquisite floral arrangements, refined decor, comfortable orthopedic mattresses and hot pressure
                        showers all
                        combine to create an indelible memory during your stay.
                    </p>
                    <!-- reservation -->
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
                    <div class="row">
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

    {{-- Mission and Vision  --}}
    <!-- Services -->



    <!-- Pricing -->
    @include('web.extraservices')

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
    <!-- Team -->
    {{-- <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Professionals</div>
                    <div class="section-title">Meet The Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item">
                        <div class="img"> <img src="{{ URL::asset('hotel/img/team/4.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Valentina Karla</h6>
                            <p>General Manager</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>valentina@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ URL::asset('hotel/img/team/1.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6>Micheal White</h6>
                            <p>Guest Service Department</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>micheal@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ URL::asset('hotel/img/team/2.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Olivia Martin</h6>
                            <p>Reservations Manager</p>
                            <div class="social valign">
                                <div class="social valign">
                                    <div class="full-width">
                                        <a href="#"><i class="ti-instagram"></i></a>
                                        <a href="#"><i class="ti-twitter"></i></a>
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-pinterest"></i></a>
                                        <p>olivia@hotel.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ URL::asset('hotel/img/team/5.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Mariana Dana</h6>
                            <p>F&B Manager</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>mariana@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ URL::asset('hotel/img/team/3.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Enrico Brown</h6>
                            <p>Head Chef</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>enrico@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="{{ URL::asset('hotel/img/team/6.jpg') }}" alt=""> </div>
                        <div class="info">
                            <h6>Victoria Dan</h6>
                            <p>Meetings and Events Manager</p>
                            <div class="social valign">
                                <div class="full-width">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>victoria@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <!-- Testiominals -->
    {{-- @include('web.testimonials') --}}
@endsection
