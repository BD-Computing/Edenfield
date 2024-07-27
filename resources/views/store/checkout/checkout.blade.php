@extends('layouts.web')

@section('title')
    Checkout
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign" data-overlay-dark="8" style="height: 350px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-60">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @livewire('store.checkout.checkout')
            </div>
        </div>
    </section>
@endsection
