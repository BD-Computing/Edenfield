<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ $settings->companyName }} | @yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ URL::asset('hotel/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('hotel/css/style.css') }}" />
    @livewireStyles()
    @yield('css')
</head>

<body>
    <style>
        .btn-custom {
            padding: 8px 20px;
            border: none;
            border-radius: 10px;
            color: #fff;
        }

        input {
            padding-left: 5px !important;
            padding-right: 5px !important;
        }

        .active {
            color: #c45026 !important;
        }

        .nav-container {
            width: 100vw !important;
            display: flex !important;
            justify-content: space-between !important;
            gap: 20px;
            align-items: center !important;
        }

        .nav-link {
            color: #fff !important;
        }

        .isActive {
            color: #bebebe !important;
            font-weight: 900 !important;
        }

        @media screen and (max-width: 1024px) {
            .nav-link {
                color: #4c5320 !important;
                /* color: #fff !important; */
            }
        }

        .logo-img {
            filter: brightness(0) invert(1) !important;
        }
    </style>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #4C5320 !important;">
        <div class="container nav-container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="{{ route('web.homepage') }}">
                    <img src="{{ URL::asset('hotel/img/logo-dark.png') }}" class="logo-img" alt=""
                        height="40px">
                </a>
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'web.homepage' ? 'isActive' : '' }}"
                            href="{{ route('web.homepage') }}">Home</a>
                    </li>

                    <li class="nav-item"><a
                            class="nav-link {{ Route::currentRouteName() == 'web.about' ? 'isActive' : '' }}"
                            href="{{ route('web.about') }}">About</a></li>

                    <li class="nav-item"><a
                            class="nav-link {{ Route::currentRouteName() == 'web.rooms' ? 'isActive' : '' }}"
                            href="{{ route('web.rooms') }}">Rooms & Suites</a></li>
                    <li class="nav-item"><a
                            class="nav-link {{ Route::currentRouteName() == 'web.restaurant' ? 'isActive' : '' }}"
                            href="{{ route('web.restaurant') }}">Restaurant</a>
                    </li>
                    <li class="nav-item"><a
                            class="nav-link {{ Route::currentRouteName() == 'web.gallery' ? 'isActive' : '' }}"
                            href="{{ route('web.gallery') }}">Gallery</a>
                    </li>

                    <li class="nav-item"><a
                            class="nav-link {{ Route::currentRouteName() == 'web.careers' ? 'isActive' : '' }}"
                            href="{{ route('web.careers') }}">Careers</a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('web.contact') }}"
                            class="nav-link {{ Route::currentRouteName() == 'web.contact' ? 'isActive' : '' }}">Contact
                            Us</a>
                    </li>
                    {{-- @if (auth()->user())
                        @if (auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('client.profile') }}">My Account</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                    <li class="nav-item cart">
                        @livewire('store.navigation-cart')
                    </li> --}}
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')
    @if ($settings->whatsappNumber)
        <div
            style="width: 60px; height: 70px; position: fixed;left: 15px !important; right: 10px; bottom: 13px;z-index: 999">
            <a href="https://wa.me/+{!! $settings->whatsappNumber !!}" target="_blank"><img
                    src="{{ URL::asset('hotel/img/whatsapp.png') }}" style="width: 60px; height: 60px;"></a>
        </div>
    @endif

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">About Hotel</h3>
                            <p class="footer-about-text">Welcome to Eldoret's premier four-star
                                TJ's
                                Boutique Hotel,
                                where
                                luxury and hospitality converge to provide an unforgettable
                                experience.
                                Discover
                                excellence in every stay.</p>

                            <div class="footer-language"> <i class="lni ti-world"></i>
                                <select onchange="location = this.value;">
                                    <option value="#0">English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Explore</h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href="{{ route('web.homepage') }}">Home</a></li>
                                <li><a href="{{ route('web.rooms') }}">Rooms & Suites</a></li>
                                <li><a href="{{ route('web.restaurant') }}">Restaurant</a></li>
                                <li><a href="{{ route('web.about') }}">About Hotel</a></li>
                                <li><a href="{{ route('web.contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">{!! $settings->officeAddress !!},
                                {!! $settings->town !!}
                                Town,<br>{!! $settings->country !!}
                            </p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone">
                                    <span class="flaticon-call" style="margin-right: 10px;"></span>
                                    <a class="color-1" href="tel:{!! $settings->salesPhoneNumber !!}">{!! $settings->salesPhoneNumber !!}</a>
                                </p>

                                <p class="footer-contact-phone"><span class="flaticon-call"
                                        style="margin-right: 10px;"></span>
                                    <a class="color-1"
                                        href="tel:+{!! $settings->phone !!}">+{!! $settings->phone !!}</a>
                                </p>
                                <p class="footer-contact-mail">{!! $settings->supportEmail !!}</p>
                            </div>
                            <div class="footer-about-social-list">
                                @if (!is_null($settings->facebook_link))
                                    <a href="{{ $settings->facebook_link }}" target="_blank"><i
                                            class="ti-facebook"></i></a>
                                @endif
                                @if (!is_null($settings->instagram_link))
                                    <a href="{{ $settings->instagram_link }}" target="_blank"><i
                                            class="ti-instagram"></i></a>
                                @endif
                                @if (!is_null($settings->tiktok_link))
                                    <a href="{{ $settings->tiktok_link }}" style="width: 15px; height: 8px;"
                                        target="_blank">
                                        <img src="{{ URL::asset('hotel/img/tiktok-icon.png') }}" alt="">
                                    </a>
                                @endif
                                @if (!is_null($settings->youtube_link))
                                    <a href="{{ $settings->youtube_link }}" target="_blank"><i
                                            class="ti-youtube"></i></a>
                                @endif
                                @if (!is_null($settings->twitter_link))
                                    <a href="{{ $settings->twitter_link }}" target="_blank"><i
                                            class="ti-twitter"></i></a>
                                @endif
                                @if (!is_null($settings->pinterest_link))
                                    <a href="{{ $settings->pinterest_link }}" target="_blank"><i
                                            class="ti-pinterest"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">&copy; Copyright {{ date('Y') }} by
                                <a href="https://www.bdcomputinglimited.co.ke">BD Computing Limited</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->

    <script src="{{ URL::asset('hotel/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/pace.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/scrollIt.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/YouTubePopUp.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/select2.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/datepicker.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ URL::asset('hotel/js/custom.js') }}"></script>

    <script src="{{ URL::asset('js/app.js') }}"></script>

    @livewireScripts()
</body>

</html>
