@extends('layouts.web')

@section('title')
    Contact Us
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
        data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>TJ's Boutique Hotel</h3>
                    <p>TJ's Boutique Hotel, a modern establishment offering the utmost comfort, convenience, and efficiency
                        to the astute traveler.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a> <br>
                            <a href="tel:{!! $settings->phone !!}">{!! $settings->phone !!}</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:{!! $settings->supportEmail !!}">{!! $settings->supportEmail !!}</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p>
                            P.O. Box {!! $settings->boxAddress !!}-{!! $settings->code !!}, {!! $settings->officeAddress !!} Estate
                            <br>{!! $settings->town !!} Town
                            Kenya
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    {{-- action="https://duruthemes.com/demo/html/cappa/demo2-light/mail.php"> --}}
                    @livewire('web.contact-form')
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997.4138950298957!2d35.29605220794331!3d0.5174995786192065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101a2e3bdfaa3%3A0x2f6135461d02d362!2sTJ&#39;S%20BOUTIQUE%20HOTEL%20%26%20APARTMENTS!5e0!3m2!1sen!2ske!4v1703160727848!5m2!1sen!2ske" 
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
