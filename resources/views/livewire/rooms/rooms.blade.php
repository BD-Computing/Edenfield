<div>
    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($roomTypes as $index => $room)
                        @if (($index + 1) % 2 == 0)
                            <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                                <figure><img src="{{ URL::asset($room->mainImage) }}" alt="" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h4><a
                                            href="{{ route('web.room-details', ['id' => $room->id]) }}">{{ $room->roomType }}</a>
                                    </h4>
                                    <p>{!! $room->description !!}</p>
                                    <h5>@money($room->price) <span>/ Night</span></h5>
                                    <div class="row room-facilities">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="border-2">
                                    <div class="info-wrapper">
                                        <div class="more"><a
                                                href="{{ route('web.room-details', ['id' => $room->id]) }}"
                                                class="link-btn" tabindex="0">Details <i
                                                    class="ti-arrow-right"></i></a>
                                        </div>
                                        <div class="butn-dark">
                                            <a href="{{ route('web.availability', ['id' => $room->id]) }}"><span>Book
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                                <figure>
                                    <img src="{{ URL::asset($room->mainImage) }}" alt="" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h4><a
                                            href="{{ route('web.room-details', ['id' => $room->id]) }}">{{ $room->roomType }}</a>
                                    </h4>
                                    <p>{!! $room->description !!}</p>
                                    <h5>@money($room->price) <span>/ Night</span></h5>

                                    <div class="row room-facilities">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                {{-- <li><i class="flaticon-clock-1"></i> 200 sqft Room</li> --}}
                                                {{-- <li><i class="flaticon-swimming"></i> Swimming Pool</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="border-2">
                                    <div class="info-wrapper">
                                        <div class="more"><a
                                                href="{{ route('web.room-details', ['id' => $room->id]) }}"
                                                class="link-btn" tabindex="0">Details <i
                                                    class="ti-arrow-right"></i></a>
                                        </div>
                                        <div class="butn-dark">
                                            <a href="{{ route('web.availability', ['id' => $room->id]) }}"><span>Book
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Search -->
</div>
