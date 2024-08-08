@extends('layouts.web')

@section('title')
    Homepage
@endsection
@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-container">
            <div class="banner-arrow wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/images/background/banner-arrow.png" alt="" title="">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="left-col col-lg-6 col-md-12">
                        <div class="inner">
                            <div class="clearfix">
                                <div class="content">
                                    <div class="bg-image">
                                        <img src="assets/images/background/bg-gradient-1.png" alt="" title="">
                                    </div>
                                    <h3>Start Traveling Now</h3>
                                    <h1><i class="d-icon">
                                            <img src="assets/images/elements/yellow-1.png" alt="" title="">
                                        </i>
                                        Explore the Top Destination of Planet Earth
                                    </h1>
                                    <p class="venture-text">Embrace the journey; Travel with passion and purpose.
                                    </p>
                                    <!-- <div class="form-box site-form">
                                                                <form method="post" action="index.html">
                                                                    <div class="row clearfix">
                                                                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                                            <div class="field-label">Destination</div>
                                                                            <div class="field-inner">
                                                                                <input type="text" name="field-name" value=""
                                                                                    placeholder="Where to go?" required>
                                                                                <i class="alt-icon fa fa-map-marker-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                                            <div class="field-label">Check in</div>
                                                                            <div class="field-inner">
                                                                                <input class="datepicker" type="text" name="field-name"
                                                                                    value="" placeholder="Check in" required>
                                                                                <i class="alt-icon fa fa-calendar-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                                            <div class="field-label">Check out</div>
                                                                            <div class="field-inner">
                                                                                <input class="datepicker" type="text" name="field-name"
                                                                                    value="" placeholder="Check out" required>
                                                                                <i class="alt-icon fa fa-calendar-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                                            <div class="field-label">Guests</div>
                                                                            <div class="field-inner">
                                                                                <input type="text" name="field-name" value=""
                                                                                    placeholder="Guests" required>
                                                                                <i class="alt-icon fa fa-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" class="theme-btn f-btn">
                                                                        <span>Search <i class="fa-solid fa-search"></i></span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <p class="lower-text"><span>3200</span> tour packages waiting for you</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-col col-lg-6 col-md-12">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-layer"
                                style="background-image: url('assets/images/resources/misc/man-with-bag.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Banner Section -->

    <!--Intro Section-->
    <div class="intro-section">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">
                <!--Block-->
                <div class="intro-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <span><img src="assets/images/icons/intro-1.png" alt=""></span>
                        </div>
                        <h4>Most Popular Destinations</h4>
                        <p class="venture-text">Discover the world's most sought-after destinations, from
                            breathtaking wonders to
                            vibrant cityscape. Unveil iconic landmarks, immerse in diverse cultures, and create
                            cherished memories
                            on your journey of a lifetime.</p>
                    </div>
                </div>
                <!--Block-->
                <div class="intro-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <span><img src="assets/images/icons/intro-2.png" alt=""></span>
                        </div>
                        <h4>Budget Friendly Packages</h4>
                        <p class="venture-text">Travel doesn't have to break the bank! Explore our curated
                            selection
                            of
                            budget-friendly packages, where you can experience incredible adventures without
                            compromising on
                            quality. Embrace wanderlust without the financial worry.</p>
                    </div>
                </div>
                <!--Block-->
                <div class="intro-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <span><img src="assets/images/icons/intro-3.png" alt=""></span>
                        </div>
                        <h4>Satisfaction Guarranted</h4>
                        <p class="venture-text">Your satisfaction is our top priority. With meticulous planning and
                            personalized
                            service, we ensure your travel experiences exceed expectations. Book with confidence,
                            knowing that your
                            journey will be nothing short of exceptional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--About Us Section-->
    <div class="about-section">
        <div class="bg-grad-right">
            <img src="assets/images/background/bg-gradient-2.png" alt="" title="">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="d-elem-1">
                            <img src="assets/images/elements/green-1.png" alt="">
                        </div>
                        <div class="title-box">
                            <div class="subtitle">Let's Explore the World</div>
                            <h2><span>We Make Your Travel More Enjoyable</span></h2>
                            <p class="venture-text">Embrace a worry-free travel experience with us as we strive to
                                make your journey more enjoyable. From seamless itineraries to handpicked
                                accommodations, we take care of every detail, leaving you free to savor every moment
                                and create unforgettable memories.</p>
                        </div>
                        <div class="features">
                            <div class="row clearfix">
                                <div class="f-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-1.png" alt="">
                                        </div>
                                        <h6>Award winning tour & travel arranger</h6>
                                    </div>
                                </div>
                                <div class="f-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-2.png" alt="">
                                        </div>
                                        <h6>Most popular booking solution provider</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-text">
                            <div class="venture-text">
                                <ul>
                                    <li>Personalized Itineraries: Tailored to your preferences and interests.</li>
                                    <li>Hand picked premium Accommodations that guarantee comfort and relaxation.
                                    </li>
                                    <li>Dedicated 24/7 support team ready to assist you at any moment.</li>
                                </ul>
                            </div>
                            <div class="link-box">
                                <a href="about.html" class="theme-btn btn-style-one"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="bg-grad-left">
                            <img src="assets/images/background/bg-gradient-26.png" alt="" title="">
                        </div>
                        <div class="d-elem-1">
                            <img src="assets/images/elements/yellow-3.png" alt="">
                        </div>
                        <div class="d-elem-2">
                            <img src="assets/images/elements/pink-4.png" alt="">
                        </div>
                        <div class="image-box clearfix">
                            <div class="image">
                                <img src="assets/images/resources/misc/tickets.jpg" alt="Tickets" title="Tickets">
                            </div>
                            <div class="image">
                                <img src="assets/images/resources/misc/man-hiking-2.jpg" alt="" title="">
                            </div>
                        </div>
                        <div class="exp">
                            <span class="count">10</span> Successful <br>Years
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (false)
        <!--Trending Destinations Section-->
        <div class="destination-section">
            <div class="bg-grad-right">
                <img src="assets/images/background/bg-gradient-3.png" alt="">
            </div>
            <div class="bg-grad-left">
                <img src="assets/images/background/bg-gradient-4.png" alt="">
            </div>
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle">Discover</div>
                    <h2><i class="bg-vector"></i><span>Popular Destinations</span></h2>
                </div>

                <div class="gallery-box">
                    <div class="masonry-container row clearfix">

                        <!--Block-->
                        <div class="dest-block-one masonry-item col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-1.jpg" alt="Gallery 1"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">India</a></h4>
                                        <div class="tour-count">
                                            <span>280 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-2.jpg" alt="Gallery 2"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Morocco</a></h4>
                                        <div class="tour-count">
                                            <span>200 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-3.jpg" alt="Gallery 3"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Istanbul</a></h4>
                                        <div class="tour-count">
                                            <span>140 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-12.jpg" alt="Gallery 12"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">London</a></h4>
                                        <div class="tour-count">
                                            <span>350 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-14.jpg" alt="Gallery  14"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Rome</a></h4>
                                        <div class="tour-count">
                                            <span>240 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-15.jpg" alt="Gallery 15"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Cairo</a></h4>
                                        <div class="tour-count">
                                            <span>512 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-6.jpg" alt="Gallery 6"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Carribean</a></h4>
                                        <div class="tour-count">
                                            <span>99 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                        <!--Block-->
                        <div class="dest-block-one masonry-item column-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="destination-single.html"><img
                                            src="assets/images/resources/gallery/gallery-7.jpg" alt="Gallery  7"></a>
                                </div>
                                <div class="hvr-box">
                                    <div class="hvr-inner">
                                        <h4><a href="destination-single.html">Istanbul</a></h4>
                                        <div class="tour-count">
                                            <span>330 Tour Packages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dest-block-one -->

                    </div>
                </div>
            </div>
        </div>
    @endif

    <!--Why Us Section-->
    <div class="why-us">
        <div class="bg-grad-left">
            <img src="assets/images/background/bg-gradient-6.png" alt="" title="">
        </div>
        <div class="bg-grad-right">
            <img src="assets/images/background/bg-gradient-5.png" alt="" title="">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-7 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="d-elem-1">
                            <img src="assets/images/elements/purple-1.png" alt="">
                        </div>
                        <div class="title-box">
                            <div class="subtitle">Why Choose Venture Africa Safaris Limited</div>
                            <h2><span>We Let Your Sweet Memory Ever Unforgottable</span></h2>
                        </div>
                        <div class="features">
                            <div class="row clearfix">

                                <div class="f-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-3.png" alt="">
                                        </div>
                                        <h4>Expert Travel Agent</h4>
                                        <p class="venture-text">Trust in the guidance of our seasoned travel
                                            agents,
                                            to curate your perfect journey.</p>
                                    </div>
                                </div><!-- .f-block-two -->

                                <div class="f-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-4.png" alt="">
                                        </div>
                                        <h4>Easy Booking Options</h4>
                                        <p class="venture-text">With our user-friendly booking platform, planning
                                            your dream vacation becomes a breeze.</p>
                                    </div>
                                </div><!-- .f-block-two -->

                                <div class="f-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-5.png" alt="">
                                        </div>
                                        <h4>World Class Service</h4>
                                        <p class="venture-text">Immerse yourself in a world of unparalleled
                                            service,
                                            for unforgettable travel experience.</p>
                                    </div>
                                </div><!-- .f-block-two -->

                                <div class="f-block-two col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img src="assets/images/icons/f-icon-6.png" alt="">
                                        </div>
                                        <h4>Total Secured Travel</h4>
                                        <p class="venture-text">Rest assured as we prioritize your safety and peace
                                            of mind, your travel is fully protected.</p>
                                    </div>
                                </div><!-- .f-block-two -->

                            </div>
                        </div>
                    </div>
                </div>

                <!--Image Col-->
                <div class="image-col col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="d-elem-2">
                            <img src="assets/images/elements/yellow-2.png" alt="">
                        </div>
                        <div class="image-box">
                            <img src="assets/images/resources/misc/man-hiking.png" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Facts Section-->
    <div class="facts-section mb-20">
        <div class="video-box wow fadeInUp">
            <div class="image-box">
                <img src="assets/images/resources/misc/boats.jpg" alt="" title="">
                <a href="https://www.youtube.com/watch?v=ZETY_l3GVQg&autoplay=1" class="lightbox-image vid-btn"><span
                        class="icon fa fa-play"><i class="ripple"></i></span></a>
            </div>
        </div>
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">

                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box">
                                    <span class="count-text" data-stop="120" data-speed="2000">0</span><i>+</i>
                                </div>
                            </div>
                            <div class="fact-title">Total <br>Destination</div>
                        </div>
                    </div><!-- .fact-block -->

                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box">
                                    <span class="count-text" data-stop="500" data-speed="3000">0</span><i>+</i>
                                </div>
                            </div>
                            <div class="fact-title">Travel <br>Packages</div>
                        </div>
                    </div><!-- .fact-block -->

                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box">
                                    <span class="count-text" data-stop="12" data-speed="2000">0</span>K<i>+</i>
                                </div>
                            </div>
                            <div class="fact-title">Total <br>Travelers</div>
                        </div>
                    </div><!-- .fact-block -->

                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box">
                                    <span class="count-text" data-stop="7" data-speed="2000">0</span>K<i>+</i>
                                </div>
                            </div>
                            <div class="fact-title">Positive <br>Reviews</div>
                        </div>
                    </div><!-- .fact-block -->

                </div>
            </div>
        </div>
    </div>
@endsection
