@extends('layouts.web')

@section('title')
    Faq
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/5.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>F.A.Qs</h5>
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Faqs -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">How can I confirm that you have received my reservation?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can confirm your reservation by checking your email for a
                                        confirmation message from us. Additionally, you can call our front desk to verify
                                        your reservation over the phone.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Up to what age are they considered children?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Children are typically considered up to the age of 12.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Do you have any discount code?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we offer discount codes periodically. You can find our current
                                        promotions and discount codes on our website or by subscribing to our newsletter for
                                        exclusive offers.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How can I get in touch with my hotel?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">To contact the hotel, you can call our front desk at <a
                                            href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a>, <a
                                            href="tel:{!! $settings->phone !!}">{!! $settings->phone !!}</a>
                                        send an email to {!! $settings->supportEmail !!}, or use the contact form on our
                                        website. We're available 24/7 to assist you.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">On the last day, can I leave the room later?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can request a late checkout on your last day, subject to
                                        availability. Please contact our front desk for details and availability.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Can I cancel my reservation?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, you can cancel your reservation by logging into your account on
                                        our website or contacting our reservations team at least 24 hours before your
                                        scheduled check-in time.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    @include('web.rooms.booking')
    <!-- Clients -->
    @include('web.clients')
@endsection
