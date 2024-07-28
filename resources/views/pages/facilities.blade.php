@extends('layouts.web')

@section('title')
    Facilities
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Other Services</h5>
                    <h1>Hotel Facilities</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
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
    <!-- Reservation & Booking Form -->
    @include('web.rooms.booking')
    <!-- Clients -->
    {{-- @include('web.clients') --}}
@endsection
