@extends('layouts.web')

@section('title')
    News
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Hotel Blog</h5>
                    <h1>Our News</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News  -->
    <section class="news section-padding bg-blck" style="background-color: rgb(73, 68, 68)">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ URL::asset('hotel/img/news/1.jpg') }}"
                                alt="">
                            <div class="date">
                                <a href="{{ route('web.post') }}"> <span>Dec</span> <i>02</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="{{ route('web.comingsoon') }}">Restaurant</a>
                            </span>
                            <h5><a href="{{ route('web.post') }}">Historic restaurant renovated</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ URL::asset('hotel/img/news/3.jpg') }}"
                                alt="">
                            <div class="date">
                                <a href="{{ route('web.post') }}"> <span>Dec</span> <i>06</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="{{ route('web.comingsoon') }}">Bathrooms</a>
                            </span>
                            <h5><a href="{{ route('web.post') }}">Hotel Bathroom Collections</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ URL::asset('hotel/img/news/1.jpg') }}"
                                alt="">
                            <div class="date">
                                <a href="{{ route('web.post') }}"> <span>Dec</span> <i>08</i> </a>
                            </div>
                        </div>
                        <div class="con"> <span class="category">
                                <a href="{{ route('web.comingsoon') }}">Design</a>
                            </span>
                            <h5><a href="{{ route('web.post') }}">Retro Lighting Design in The Hotels</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Pagination -->
                    <ul class="news-pagination-wrap align-center mb-30 mt-30">
                        <li><a href="{{ route('web.comingsoon') }}"><i class="ti-angle-left"></i></a></li>
                        <li><a href="{{ route('web.comingsoon') }}">1</a></li>
                        <li><a href="{{ route('web.comingsoon') }}" class="active">2</a></li>
                        <li><a href="{{ route('web.comingsoon') }}">3</a></li>
                        <li><a href="{{ route('web.comingsoon') }}"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    {{-- @include('web.rooms.booking') --}}
    <!-- Clients -->
    @include('web.clients')
@endsection
