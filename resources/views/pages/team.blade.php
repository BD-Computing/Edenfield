@extends('layouts.web')

@section('title')
    Team
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Professionals</h5>
                    <h1>Meet The Team</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
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
    </section>
    <!-- Reservation & Booking Form -->
    @include('web.rooms.booking')
    <!-- Clients -->
    @include('web.clients')
@endsection
