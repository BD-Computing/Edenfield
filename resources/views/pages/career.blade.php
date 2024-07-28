@extends('layouts.web')

@section('title')
    Careers
@endsection
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ URL::asset('hotel/img/slider/4.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Careers</h5>
                    <h1>Job Openings</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Careers -->
    <section class="positions section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-60">
                    <section class="rooms-page section-padding" data-scroll-index="1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <div class="section-subtitle">{{ $career['title'] }}</div>
                                </div>
                                <div class="col-md-12">
                                    <p class="mb-30">
                                        {{ $career['description'] }}
                                    </p>
                                    <h6>Responsibilities</h6>
                                    <p>{!! $career['responsibilities'] !!}</p>
                                    <h6>File</h6>
                                    <a href="{{ URL::asset($career['file']) }}" class="btn view-menu btn-sm btn-primary"
                                        style="padding: 10px 20px; margin-bottom: 20px;" target=" _blank">
                                        Download Job Advert
                                    </a>
                                    <h6>Deadline</h6>
                                    <ul class="list-unstyled page-list mb-30">
                                        <li>
                                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                                            <div class="page-list-text">
                                                <p>{{ \Carbon\Carbon::parse($career['deadline'])->toFormattedDayDateString() }}
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><small>Please submit a resume and cover letter with compensation history to
                            <b>{!! $settings->supportEmail !!}</b>.</small></p>
                </div>
            </div>
        </div>
    </section>
@endsection
