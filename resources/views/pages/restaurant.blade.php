@extends('layouts.web')

@section('title')
    Restaurant
@endsection
@section('css')
    <style>
        .view-menu {
            background-color: #4c5324;
            border-radius: 8px;
            color: white;
            font-weight: 800;
            border: none;
        }

        .view-menu:hover {
            background-color: #C98A41;
            color: white
        }
    </style>
@endsection
@section('content')
    <!-- Restaurant Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/restaurant/1.jpg') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/restaurant/2.jpg') }}"></div>
            <div class="text-center item bg-img" data-overlay-dark="3"
                data-background="{{ URL::asset('hotel/img/restaurant/3.jpg') }}"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Restaurant Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    @include('layouts.partials.stars')
                    <div class="section-subtitle">An Experience for the Senses</div>
                    <div class="section-title">The Restaurant</div>
                </div>
                <div class="col-md-12">
                    <p class="mb-30">At TJ's Hotel Restaurant, we are committed to serving wholesome and delightful
                        cuisine. Our kitchen utilizes genuine ingredients to craft nutritious dishes while maintaining the
                        highest hygiene standards in accordance with government regulations. Positioned on the rooftop, our
                        restaurant offers a serene ambiance and picturesque vistas of Eldoret City, enhancing your dining
                        experience. Our skilled chefs operate from dawn until midnight, ensuring unforgettable culinary
                        moments that will stay with you. Enjoy your meal, and may it be a gastronomic delight.</p>
                    <h6>Hours</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                            <div class="page-list-text">
                                <p>Breakfast: 6.00 am – 10.00 am (daily)</p>
                            </div>
                        </li>

                        <li>
                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                            <div class="page-list-text">
                                <p>Dinner: open from 6.00 pm, last order at 11.00 pm (daily)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Restaurant Menu -->
    <section id="menu" class="restaurant-menu menu section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title"><span>Restaurant Menus</span></div>
                </div>
            </div>
            @foreach ($menus as $menu)
                <div class="row" style="margin-top: 5px;">
                    <a href="{{ URL::asset($menu['menuLink']) }}" class="btn view-menu" target="_blank">
                        {{ $menu['title'] }}
                    </a>
                </div>
            @endforeach

            <div class="row">
                @include('web.food')
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    @include('web.testimonials')
@endsection
