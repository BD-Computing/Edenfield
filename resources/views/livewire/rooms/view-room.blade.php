<div>
    <style>
        .btn-custom {
            padding: 8px 20px;
            background-color: #4C5324;
            color: white
        }

        .secondary {
            color: #fff;
            background-color: #C98A41 !important;
        }
    </style>
    <!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/slider/3.jpg') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/slider/2.jpg') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partials.stars')
                    <div class="section-subtitle">{!! $settings->companyName !!}</div>
                    <div class="section-title">
                        {!! $roomDetails->roomType !!}
                    </div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">
                        {!! $roomDetails->description !!}
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from
                                            @if (!is_null($settings->checkInTime))
                                                {!! $settings->checkInTime !!}
                                            @else
                                                12:00 PM - anytime
                                            @endif
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out
                                            @if (!is_null($settings->checkOutTime))
                                                {!! $settings->checkOutTime !!}
                                            @else
                                                10:00 AM
                                            @endif
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @if (!is_null($settings->checkInInstructions))
                            <div class="col-md-12">
                                <h6>Special check-in instructions</h6>
                                <p>{!! $settings->checkInInstructions !!}</p>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <h6>Pets</h6>
                            @if ($roomDetails->petsAllowed)
                                <p>Pets are allowed</p>
                            @else
                                <p>Pets not allowed</p>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <h6>Price</h6>
                            <p>
                               <b> @money($roomDetails->price)</b>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <h6>Children and extra beds</h6>
                            <p>Children are welcome Kids stay free! Children stay free when using existing bedding;
                                children may not be eligible for complimentary breakfast Rollaway/extra beds are
                                available.</p>
                        </div>


                        <div class="col-md-12">
                            @livewire('rooms.availability-checker', ['roomTypeID' => $roomDetails->id])
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                            <div class="page-list-text">
                                <p>
                                    @if ($roomDetails->adults < 2)
                                        1 Person
                                    @else
                                        1 - {{ $roomDetails->adults }} Persons
                                    @endif
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <div class="page-list-text">
                                <p>Free Wifi</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p>200 sqft room</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                            <div class="page-list-text">
                                <p>Breakfast</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-towel"></span> </div>
                            <div class="page-list-text">
                                <p>Towels</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
