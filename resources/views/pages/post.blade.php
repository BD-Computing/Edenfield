@extends('layouts.web')

@section('title')
    News
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5><a href="{{ route('web.news') }}">News</a> / Post Page</h5>
                    <h1>Historic Restaurant</h1>
                    <div class="post">
                        <div class="author"> <img src="{{ URL::asset('hotel/img/avatar.png') }}" alt=""
                                class="avatar"> <span>Emma Wangoi</span>
                        </div>
                        <div class="date-comment"> <i class="ti-calendar"></i> 30 Dec 2022 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Post -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ URL::asset('hotel/img/restaurant/2.jpg') }}" class="mb-30" alt="">
                    <h2>Historic restaurant renovated</h2>
                    <p>Every corner of our establishment is undergoing a rejuvenation, from the lobby that will soon welcome
                        you with a fresh, modern ambiance, to the rooms that will boast contemporary design and cutting-edge
                        amenities. Our goal is to create an environment that not only meets but exceeds your expectations.
                    </p>
                    <p>The dining experience will be elevated, with a revamped restaurant offering a diverse culinary
                        journey, and a trendy bar for you to unwind and savor exquisite cocktails. Our state-of-the-art
                        conference and event spaces are being enhanced to cater to all your business
                        and celebratory needs.
                    </p>
                    <blockquote>
                        <p>This hotel is a haven of modern elegance and unparalleled comfort. From its stylishly appointed
                            rooms to its exquisite dining options, every detail has been meticulously crafted to provide an
                            unforgettable experience. With world-class amenities, attentive staff, and a prime location,
                            it's the perfect choice for both business and leisure travelers seeking a luxurious retreat..
                        </p> <cite>Wanyama Aggrey</cite>
                    </blockquote>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ URL::asset('hotel/img/restaurant/1.jpg') }}" class="mb-30" alt="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ URL::asset('hotel/img/restaurant/3.jpg') }}" class="mb-30" alt="">
                        </div>
                    </div>
                    <p>This hotel exudes an unparalleled elegance that captivates every visitor. From its grand entrance to
                        the meticulously designed interiors, every detail speaks of opulence and sophistication. The
                        tasteful decor, luxurious furnishings, and impeccable attention to aesthetics create an ambiance
                        that resonates with timeless grace. It's a place where elegance meets comfort, making every stay a
                        truly refined experience.</p>
                    <div class="post-comment-section">
                        <div class="row">
                            <!-- Comment -->
                            <div class="col-md-12">
                                <div class="news-post-comment-wrap">
                                    <div class="post-user-comment"> <img src="{{ URL::asset('hotel/img/avatar.png') }}"
                                            alt=""> </div>
                                    <div class="post-user-content">
                                        <span>
                                            @include('layouts.partials.stars')
                                        </span>
                                        <h3>Wanyama Aggrey<span> 29 August 2023</span></h3>
                                        <p>This hotel offers a luxurious escape, where comfort meets elegance. Impeccable
                                            service, stunning views, and world-class amenities create an unforgettable
                                            experience.</p> <a class="post-repay" href="#">Reply<i
                                                class="ti-back-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form -->
                            <div class="col-md-8 mb-30">
                                <h3 class="mb-30">Leave a Reply</h3>
                                <form method="post" class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Full Name *"
                                            required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email Address *"
                                            required="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Comment *" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="butn-dark2"><span>Send Comment</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="news2-sidebar row">
                        <div class="col-md-12">
                            <div class="widget search">
                                <form>
                                    <input type="text" name="search" placeholder="Type here ...">
                                    <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul class="recent">
                                    <li>
                                        <div class="thum"> <img src="{{ URL::asset('hotel/img/restaurant/2.jpg') }}"
                                                alt=""> </div>
                                        <a href="{{ route('web.post') }}">Historic restaurant renovated</a>
                                    </li>
                                    {{-- <li>
                                        <div class="thum"> <img src="{{ URL::asset('hotel/img/spa/3.jpg') }}"
                                                alt=""> </div>
                                        <a href="{{ route('web.post') }}">Benefits of Spa Treatments</a>
                                    </li> --}}
                                    <li>
                                        <div class="thum"> <img src="{{ URL::asset('hotel/img/slider/7.jpg') }}"
                                                alt=""> </div>
                                        <a href="{{ route('web.post') }}">Retro Lighting Design in The Hotels</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Archives</h6>
                                </div>
                                <ul>
                                    <li><a href="#">December 2022</a></li>
                                    <li><a href="#">November 2022</a></li>
                                    <li><a href="#">October 2022</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    <li><a href="{{ route('web.news') }}"><i class="ti-angle-right"></i>Restaurant</a>
                                    </li>
                                    <li><a href="{{ route('web.news') }}"><i class="ti-angle-right"></i>Hotel Design</a>
                                    </li>
                                    {{-- <li><a href="{{ route('web.news') }}"><i class="ti-angle-right"></i>Span Center</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Tags</h6>
                                </div>
                                <ul class="tags">
                                    <li><a href="{{ route('web.restaurant') }}">Restaurant</a></li>
                                    <li><a href="{{ route('web.comingsoon') }}">Hotel</a></li>
                                    {{-- <li><a href="{{ route('web.comingsoon') }}">Health Club</a></li> --}}
                                    <li><a href="{{ route('web.homepage') }}">Luxury Hotel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
