@extends('layouts.web')
@section('title')
    @yield('app-title')
@endsection
@section('css')
    @yield('css')
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign" data-overlay-dark="8" style="height: 350px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-60">
                    <h2>@yield('title')</h2>
                    <p>Welcome back {{ auth()->user()->name }},</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row two">
                <div class="col col-sm-12">
                    @include('client.links')
                </div>
                <div class="col col-sm-12" style="width: 100% !important;">
                    @yield('app-content')
                </div>
            </div>
        </div>
    </section>
@endsection
