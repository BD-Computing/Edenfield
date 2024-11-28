@extends('layouts.web')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="grid sm:grid-cols-2 items-start gap-16 p-4 mx-auto max-w-7xl bg-white my-5">
        <div>
            <h1 class="text-gray-800 text-3xl font-extrabold">Ready to record your podcast?</h1>
            <p class="text-sm text-gray-500 mt-4">
                Get in touch with our expert team today to find out more about our podcast
                and other production services. Alternatively, you can get started right away by booking your podcast
                recording slot at our {{ $settings->companyName }} studio today.
            </p>
            <p class="text-sm text-gray-500 mt-4 font-bold">
                Contact us today to discuss your project and take the first step toward achieving your goals!
            </p>

            <div class="mt-12">
                <h2 class="text-gray-800 text-base font-bold">Email</h2>
                <ul class="mt-4">
                    <li class="flex items-center">
                        <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#028ab0'
                                viewBox="0 0 479.058 479.058">
                                <path
                                    d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                    data-original="#000000" />
                            </svg>
                        </div>
                        <a href="" class="text-[var(--primary)] text-sm ml-4">
                            <small class="block">Mail</small>
                            <strong>{!! $settings->supportEmail !!}</strong>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-12">
                <h2 class="text-gray-800 text-base font-bold">Socials</h2>
                <div class="flex mt-8 space-x-6 text-gray-600">
                    @if (!is_null($settings->facebook_link))
                        <a class="hover:opacity-75 rise-shake" href="{{ $settings->facebook_link }}" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Facebook </span>
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                    @endif
                    @if (!is_null($settings->instagram_link))
                        <a class="hover:opacity-75 rise-shake" href="{{ $settings->instagram_link }}" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Instagram </span>
                            <i class="bi bi-instagram  text-4xl text-rose-500"></i>
                        </a>
                    @endif

                    @if (!is_null($settings->twitter_link))
                        <a class="hover:opacity-75 rise-shake" href="{{ $settings->twitter_link }}" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Twitter </span>
                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    @endif
                    @if (!is_null($settings->tiktok_link))
                        <a class="hover:opacity-75 rise-shake" href="{{ $settings->tiktok_link }}" target="_blank"
                            rel="noreferrer">
                            <span class="sr-only"> Tiktok </span>
                            <i class="bi bi-tiktok text-4xl text-gray-900"></i>
                        </a>
                    @endif
                    @if ($settings->whatsappNumber)
                        <a href="https://wa.me/+{!! $settings->whatsappNumber !!}" target="_blank" class="rise-shake">
                            <i class="bi bi-whatsapp text-4xl text-green-500"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div>
            @livewire('web.contact-form')
        </div>

    </div>

    <div class="bg-white py-5 sm:py-5">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Reservation
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            <a href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a> <br>
                            <a href="tel:{!! $settings->phone !!}">+{!! $settings->phone !!}</a>
                        </p>
                    </div>
                </div>

                <div class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Emails
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            <a href="mailto:{!! $settings->supportEmail !!}">{!! $settings->supportEmail !!}</a> <br>
                            <a href="mailto:{!! $settings->salesEmail !!}">{!! $settings->salesEmail !!}</a>
                        </p>
                    </div>
                </div>

                <div class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Address
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">
                            P.O. Box {!! $settings->boxAddress !!}-{!! $settings->code !!}, {!! $settings->officeAddress !!} Estate
                            <br>{!! $settings->town !!},
                            Kenya
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 mb-10">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7858463232596!2d36.7862278124167!3d-1.3034968986786348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f116eb38819c5%3A0x24f2f146f121fe51!2sNine%20Planets%20apartments!5e0!3m2!1sen!2ske!4v1732794513655!5m2!1sen!2ske"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
