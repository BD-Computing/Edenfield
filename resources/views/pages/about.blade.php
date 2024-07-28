@extends('layouts.web')

@section('title')
    About Us
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header  bg-img bg-fixed" style="margin-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Luxury Travel</h5>
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
                    <div class="section-subtitle"> Welcome to Venture Africa Safaris!</div>
                    <p>

                        Nestled in the heart of Kenya, Venture Africa Safaris is your premier gateway to exploring the
                        breathtaking landscapes, diverse wildlife, and rich cultural heritage that Africa has to offer. <br>
                        With a passion for adventure and a commitment to exceptional service, we specialize in crafting
                        unforgettable safari experiences that cater to your every need and desire. </p>
                    <h3>Our Story</h3>
                    <p>
                        Venture Africa Safaris was born from a love for the wild and a desire to share the unparalleled
                        beauty of Africa with the world. Founded by a team of seasoned explorers and travel enthusiasts, our
                        company is built on the principles of sustainability, community engagement, and authentic adventure.
                        Our intimate knowledge of Kenya's diverse ecosystems and vibrant cultures allows us to create
                        journeys that are as enriching as they are exhilarating.
                    </p>
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="text">
                            <p>Reservation</p>
                            <span>
                                <a href="tel:+{!! $settings->salesPhoneNumber !!}"><i class="bi bi-telephone-plus-fill"></i>
                                    +{!! $settings->salesPhoneNumber !!}</a></span>
                            <br>
                            <span>
                                <a href="tel:{!! $settings->phone !!}"><i class="bi bi-telephone-plus-fill"></i>
                                    {!! $settings->phone !!}</a>
                            </span>

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
                    <div class="row">
                        <img src="{{ URL::asset('assets/images/resources/misc/man-hiking.png') }}" alt="">

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
