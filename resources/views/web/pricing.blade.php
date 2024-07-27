@extends('layouts.web')

@section('title')
    Pricing
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Pricing Plan</h5>
                    <h1>Extra Pricing</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Light -->
    <section class="pricing section-padding">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="{{ URL::asset('hotel/img/pricing/1.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Room cleaning</div>
                            <div class="amount">Ksh 500.00<span>/ month</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Thorough daily cleaning routines</li>
                                <li><i class="ti-check"></i> Prompt and efficient housekeeping</li>
                                <li><i class="ti-close unavailable"></i>Immaculate room upkeep standards</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="{{ URL::asset('hotel/img/pricing/2.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Drinks included</div>
                            <div class="amount">Ksh 400.00<span>/ daily</span></div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i> Diverse beverage selection</li>
                                <li><i class="ti-check"></i> Innovative and seasonal offerings</li>
                                <li><i class="ti-close unavailable"></i>Premium quality</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="{{ URL::asset('hotel/img/pricing/3.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Room Breakfast</div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i>Early and late options</li>
                                <li><i class="ti-check"></i> Personalized experience</li>
                                <li><i class="ti-check"></i>Fresh and delicious</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="{{ URL::asset('hotel/img/pricing/5.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Dinner</div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i>Early and late options</li>
                                <li><i class="ti-check"></i> Varied menu to suit preferences.</li>
                                <li><i class="ti-check"></i>Premium ingredients
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card">
                        <img src="{{ URL::asset('hotel/img/pricing/3.jpg') }}" alt="">
                        <div class="desc">
                            <div class="name">Room Breakfast</div>
                            <ul class="list-unstyled list">
                                <li><i class="ti-check"></i>Early and late options</li>
                                <li><i class="ti-check"></i> Personalized experience</li>
                                <li><i class="ti-check"></i>Fresh and delicious</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    {{-- @include('web.rooms.booking') --}}

    {{-- Clients --}}
    @include('web.clients')
@endsection
