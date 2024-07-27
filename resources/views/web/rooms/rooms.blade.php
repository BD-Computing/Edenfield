@extends('layouts.web')

@section('title')
    Rooms
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    @include('layouts.partials.stars')
                    <h5>TJ's Boutique Hotel</h5>
                    <h1>Rooms & Suites</h1>
                </div>
            </div>
        </div>
    </div>
    @livewire('rooms.rooms')
    <!-- Pricing -->
    @include('web.extraservices')
@endsection
