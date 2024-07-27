@extends('layouts.web')
@section('title')
    Cart
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign" data-overlay-dark="8" style="height: 300px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-40">
                    <h1>Your Booking Cart</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @livewire('store.checkout.cart')
            </div>
        </div>
    </section>
@endsection
