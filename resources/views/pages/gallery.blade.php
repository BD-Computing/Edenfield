@extends('layouts.web')

@section('title')
    Gallery
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Images & Videos</h5>
                    <h1>Our Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Images</div>
                    <div class="section-title">Image Gallery</div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/slider/7.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/slider/7.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/slider/5.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/slider/5.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/slider/4.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/slider/4.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="{{ URL::asset('hotel/img/slider/2.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/slider/2.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ URL::asset('hotel/img/slider/1.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/slider/1.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/8.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/8.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/5.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/5.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/10.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/10.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/16.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/16.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/17.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/17.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/18.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/18.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/19.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/19.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/1.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/1.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ URL::asset('hotel/img/rooms/20.jpg') }}" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ URL::asset('hotel/img/rooms/20.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Videos</div>
                    <div class="section-title">Video Gallery</div>
                </div>
                <!-- 2 columns -->
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ URL::asset('hotel/img/slider/2.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/jsSINsl0BMg"> <span
                                    class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ URL::asset('hotel/img/slider/3.jpg') }}" alt="Vimeo">
                            <a class="video-gallery-button vid" href="https://youtu.be/p4dA4PBplYc"> <span
                                    class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ URL::asset('hotel/img/slider/6.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh8--rtm2MM"> <span
                                    class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ URL::asset('hotel/img/slider/7.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/eAYIPsAO2Ls"> <span
                                    class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="{{ URL::asset('hotel/img/slider/1.jpg') }}" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/JD__fIQ-6bU"> <span
                                    class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Reservation & Booking Form -->
    {{-- @include('web.rooms.booking') --}}


    <!-- Clients -->
    {{-- @include('web.clients') --}}
@endsection
    