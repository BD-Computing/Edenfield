<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $settings->companyName }} | @yield('title')</title>

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" type="image/x-icon" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles()
    @yield('css')
</head>

<body>
    <style>
        .circle-container {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .circle-progress {
            position: absolute;
            height: 70px;
            width: 70px;
            border-radius: 50%;
            border: 5px solid #FFFFFF;
            border-radius: 50%;
        }

        .circle-progress::before {
            content: "";
            position: absolute;
            height: 70px;
            width: 70px;
            border-radius: 50%;
            border: 5px solid transparent;
            border-top-color: #000000;
            top: -5px;
            left: -5px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    {{-- <div class="animation-preloader">
                        <div class="txt-loading">
                            <span data-text-preloader="V" class="letters-loading">V</span>
                            <span data-text-preloader="E" class="letters-loading">E</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="T" class="letters-loading">T</span>
                            <span data-text-preloader="U" class="letters-loading">U</span>
                            <span data-text-preloader="R" class="letters-loading">R</span>
                            <span data-text-preloader="E" class="letters-loading">E</span>
                        </div>
                    </div> --}}
                    <div class="circle-container">
                        <div class="circle-progress"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Main Header-->
        <header class="main-header">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <!-- Main Box -->
                    <div class="main-box clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{ route('web.homepage') }}" title="Logo">
                                    <img src="images/logo.png" alt="Logo" title="Venture Africa Safaris Logo">
                                </a>
                            </div>
                        </div>

                        <div class="nav-box clearfix">
                            <!--Nav Outer-->
                            <div class="nav-outer clearfix">
                                <nav class="main-menu">
                                    <ul class="navigation clearfix">
                                        <li class="{{ Route::currentRouteName() == 'web.homepage' ? 'current' : '' }}">
                                            <a href="{{ route('web.homepage') }}">Home</a>

                                        </li>
                                        @if (false)
                                            <li class="dropdown">
                                                <a href="tour-list.html">Tours</a>
                                                <ul>
                                                    <li>
                                                        <a href="tour-list.html">Tours List</a>
                                                    </li>
                                                    <li>
                                                        <a href="tour-packages.html">Tour Packages</a>
                                                    </li>
                                                    <li>
                                                        <a href="tour-single.html">Tour Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="activities.html">Activities</a>
                                                    </li>
                                                    <li>
                                                        <a href="activity-single.html">Activity Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif

                                        <li class="{{ Route::currentRouteName() == 'web.about' ? 'current' : '' }}">
                                            <a href="{{ route('web.about') }}">About</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'web.services' ? 'current' : '' }}">
                                            <a href="{{ route('web.services') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'web.contact' ? 'current' : '' }}">
                                            <a href="{{ route('web.contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav><!-- .main-menu -->
                            </div>
                            <!--Nav Outer End-->
                        </div>

                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener">
                                <span class="icon">
                                    <img src="{{ URL::asset('assets/images/icons/menu-icon.svg') }}" alt="">
                                </span>
                            </button>
                        </div>

                        <div class="links-box clearfix">
                            @if (false)
                                <div class="link login">
                                    <a href="#">Login / Signup</a>
                                </div>
                            @endif
                            <div class="link social">
                                <ul class="social-links clearfix">
                                    <li>
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="link call-to">
                                <a href="tel:+{{ $settings->phone }}">
                                    <i class="icon fa-solid fa-phone"></i> Call Us
                                    <span class="nmbr">+{{ $settings->phone }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Upper -->
        </header>
        <!--End Main Header -->

        <!--Menu Backdrop-->
        <div class="menu-backdrop"></div>

        <!-- Hidden Navigation Bar -->
        <div class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
                <div class="hidden-bar-closer">
                    <span class="icon">
                        <svg class="icon-close" role="presentation" viewBox="0 0 16 14">
                            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </div>
                <div class="nav-logo-box">
                    <!-- logo will be copied here ! -->
                </div>

                <!-- .Side-menu -->
                <nav class="side-menu">
                    <!-- main-menu will be copied here! -->
                </nav><!-- .side-menu -->

                <div class="links-box clearfix">
                    <div class="clearfix">
                        @if (false)
                            <div class="link">
                                <a href="#" class="theme-btn btn-style-one"><span>Login / Signup</span></a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- / Hidden Bar Wrapper -->
        </div>
        <!-- / Hidden Bar -->

        <div class="row mb-20" style="margin-bottom: 20px">
            @yield('content')
        </div>

        <!--Subscribe Section-->
        <div class="subscribe-section">
            <div class="auto-container">
                <div class="outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="bg-grad-left">
                        <img src="assets/images/background/bg-gradient-13.png" alt="" title="">
                    </div>
                    <div class="bg-grad-right">
                        <img src="assets/images/background/bg-gradient-14.png" alt="" title="">
                    </div>
                    <div class="content-box">
                        <div class="bg-layer"
                            style="background-image: url('assets/images/resources/featured/banner-7.jpg');">
                        </div>
                        <div class="row clearfix">
                            <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="title-box">
                                        <div class="subtitle">Let's Explore the World</div>
                                        <h2>Get Special Offers in Your Inbox</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class="form-box subscribe-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <div class="field-inner">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Submit your email" required>
                                                </div>
                                                <button type="submit" class="theme-btn">
                                                    <i class="icon fa fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Footer-->
        <footer class="main-footer">
            <div class="upper-section">
                <div class="auto-container">
                    <div class="content-box">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-4 col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <a href="index.html" title="Venture">
                                            <img src="images/logo.png" alt="" title="Venture">
                                        </a>
                                    </div>
                                    <div class="footer-info">
                                        <ul class="info">
                                            <li class="address">
                                                <a href="#"><i class="icon fa fa-map-marker-alt"></i>
                                                    {{ $settings->boxAddress }}
                                                    {{ $settings->code }} -
                                                    {{ $settings->officeAddress }}
                                                    {{ $settings->town }}, <br>
                                                    {{ $settings->country }}
                                                </a>
                                            </li>
                                            <li class="phone">
                                                <a href="tel:{{ $settings->phone }}"><i
                                                        class="icon fa-solid fa-phone"></i>{{ $settings->phone }}</a>
                                            </li>
                                            <li class="email">
                                                <a href="mailto:{{ $settings->email }}"><i
                                                        class="icon fa fa-envelope"></i>
                                                    {{ $settings->email }}</a>
                                            </li>
                                        </ul>
                                        <ul class="social-links clearfix">
                                            <li>
                                                <a href="#" class="facebook"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="row clearfix">
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4>Top Destination</h4>
                                            <div class="links">
                                                <ul>
                                                    <li>
                                                        <a href="#">New York</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">London</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Rome</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Mascot</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Dhaka</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4>Useful Links</h4>
                                            <div class="links">
                                                <ul>
                                                    <li>
                                                        <a href="#">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Company Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Team Members</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Support</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Career</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h4>Featured Tours</h4>
                                    <!--Logo-->
                                    <div class="gallery">
                                        <div class="gallery-item">
                                            <div class="image">
                                                <a href="#"><img
                                                        src="assets/images/resources/thumbnails/oman-thumb.jpg"
                                                        alt="Oman"></a>
                                            </div>
                                            <h6><a href="#">Adventure in Oman's Rimal Bani Wahiba</a></h6>
                                            <div class="price">Starts from <span class="amount">$399</span></div>
                                        </div>
                                        <div class="gallery-item">
                                            <div class="image">
                                                <a href="#"><img
                                                        src="assets/images/resources/thumbnails/maldives-thumb.jpg"
                                                        alt=""></a>
                                            </div>
                                            <h6><a href="#">Unveiling the Serenity of the Maldives</a></h6>
                                            <div class="price">Starts from <span class="amount">$459</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="copyright">All rights researved <strong>{{ $settings->companyName }}</strong>
                            &copy; 2024</div>
                        <div class="bottom-links">
                            <ul class="clearfix">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li> <a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="icon">
            <img src="{{ URL::asset('assets/images/icons/arrow-up.svg') }}" alt="" title="Go To Top"></span>
    </div>

    <script src="{{ URL::asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/isotope.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/slick.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/appear.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom-script.js') }}"></script>
    {{-- <script src="{{ URL::asset('js/app.js') }}"></script> --}}
    @livewireScripts()
</body>

</html>
