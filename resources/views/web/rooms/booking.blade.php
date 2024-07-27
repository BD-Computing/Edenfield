@extends('layouts.web')

@section('title')
    Booking
@endsection
@section('content')
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ URL::asset('hotel/img/slider/2.jpg') }}" data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p>
                            @include('layouts.partials.stars')
                        </p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                            breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> 
                                    <a class="color-1" href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a> 
                            </div>
                        </div>
                        <!-- <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p> -->
                    </div>
                    <!-- Booking From -->
                    <div class="col-12">
                        @livewire('rooms.availability-checker')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
