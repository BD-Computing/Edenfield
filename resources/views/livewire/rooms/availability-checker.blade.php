{{-- <section class="section-padding bg-cream mb-90"> --}}
<section class="pt-50" style="padding-bottom: 50px">
    {{-- <style>
        select {
            padding: initial;
            margin: initial;
        }

        form {
            width: initial;
            padding: 20px;
            margin: inherit;
        }

        .container {
            padding: initial;
        }

        .top {
            padding: 20px;
        }

        .top>div {
            padding: initial;
        }

        a {
            text-decoration: none !important;
            text-align: center;
        }

        .action-btn {
            background: #495224;
            color: #fff;
        }

        button {
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .availability-btn {
            padding: 10px 20px;
            width: 100%;
        }

        a:hover {
            color: white
        }
    </style> --}}
    {{-- <div class="container">
        <div class="top">
            <div class="section-subtitle">{{ $settings->companyName }} Rooms & Suites</div>
            <div class="section-title">Check Availability

                @if (!is_null($roomType))
                    of {{ $roomType->roomType }}
                @endif
            </div>
        </div>
        <form>
            <div class="row mb-30">
                <div class="col-12">
                    <div>
                        <label>Room Type</label>
                        <div class="">
                            <select class="form-control" wire:model="roomTypeID">
                                <option>Select an Option</option>
                                @foreach ($roomTypes as $rType)
                                    <option value="{{ $rType->id }}">{{ $rType->roomType }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <label>Check in</label>
                        <div class="">
                            <input type="date" class="form-control " placeholder="Check in" wire:model="checkInDate">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <label>Check out</label>
                        <div class="">
                            <input type="date" class="form-control " placeholder="Check out"
                                wire:model="checkOutDate">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-6">
                    <div>
                        <label>Adults</label>
                        <div class="">
                            <select class="form-control" wire:model="adults">
                                <option value="0">Select an Option</option>
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                                <option value="3">3 Adults</option>
                                <option value="4">4 Adults</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label>Children</label>
                        <div class="">
                            <select class="form-control" wire:model="children">
                                <option value="0">Select an Option </option>
                                <option value="0">No Child </option>
                                <option value="1">1 Child</option>
                                <option value="2">2 Children</option>
                                <option value="3">3 Children</option>
                                <option value="4">4 Children</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-top: 50px;">
                    @if (!is_null($errorMessage))
                        <p style="color: red; font-style: italics;">{{ $errorMessage }}</p>
                    @endif
                    <p></p>
                    <button wire:click.prevent="checkAvailability()" type="button" class="availability-btn action-btn">
                        Check Availability Now
                    </button>
                </div>
            </div>
        </form>
        @if ($showRooms)
            <section>
                <!-- project content -->
                <div class="row">
                    <div class="col-12">
                        @if (count($rooms) > 0)
                            <div class="col-md-12 rooms">
                                <style>
                                    .top>h6,
                                    .top>p {
                                        color: #000 !important;
                                    }
                                </style>
                                <div class="top">
                                    <h6>Rooms</h6>
                                    @if (count($rooms) === 1)
                                        <p>There is 1 {!! $roomType->roomType !!} unit available </p>
                                    @else
                                        <p>There are {{ count($rooms) }} {!! $roomType->roomType !!}s available to check
                                            from
                                        </p>
                                    @endif
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Room Number</th>
                                            <th scope="col">Beds</th>
                                            <th scope="col">Adults</th>
                                            <th scope="col">Kids</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rooms as $index => $room)
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $room->roomNumber }}</td>
                                                <td>{{ $room->bedNumber }}</td>
                                                <td>{{ $room->adults }}</td>
                                                <td>{{ $room->children }}</td>
                                                <td><b>
                                                        @php
                                                            $amount = $days * $room->price;
                                                        @endphp
                                                        @money($amount)
                                                    </b>
                                                </td>
                                                <td>
                                                    @auth()
                                                        @if (auth()->user() && !auth()->user()->is_admin)
                                                            @if ($this->checkIfExists($room->id))
                                                                <a href="{{ route('cart') }}" class="btn-custom secondary">
                                                                    <button type="button" class="btn btn-success">
                                                                        View In Cart
                                                                    </button>
                                                                </a>
                                                            @else
                                                                <button type="button" class="btn btn-primary"
                                                                    wire:click.prevent="addToCart({{ $room->id }})">
                                                                    Add to Cart
                                                                </button>
                                                            @endif
                                                        @endif
                                                    @else
                                                        <a class="btn-custom secondary action-btn"
                                                            href="{{ route('login') }}">
                                                            Login to Place the Order
                                                        </a>
                                                    @endauth
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
    </div>
    @endif
    </div> --}}
    <style>
        button.booking {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #4C5320;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            padding: 10px 50px;
            font-weight: bolder;
        }

        img.book {
            width: 100px;
            filter: brightness(0) invert(1);
        }

        .booking>span {
            padding: 0 !important;
            margin: 0 !important;
            color: #ffffff;
            font-size: 16px;
        }
    </style>
    <a href="https://www.booking.com/hotel/ke/tjs-boutique.html" target="_blank" rel="noopener noreferrer">
        <button class="booking">
            <span>
                Book on
            </span>
            <img src="{{ URL::asset('images/booking.png') }}" class="book" alt="" height="30px">
        </button>
    </a>
</section>
