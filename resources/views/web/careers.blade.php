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
                    @foreach ($careers as $career)
                        <a href="{{ route('web.career', ['id' => $career['id']]) }}">
                            <div class="position">
                                <a href="{{ route('web.career', ['id' => $career['id']]) }}">
                                    <h2>{{ $loop->index + 1 }}.</h2>
                                </a>
                                <div class="position-title">
                                    {{ $career['title'] }}
                                    <span>Closing Date:
                                        {{ \Carbon\Carbon::parse($career['deadline'])->toFormattedDayDateString() }}</span>
                                </div>
                                <div class="position-location"><span>Location</span>{!! $settings->town !!} </div>
                                <div class="position-time">Employment Type <span>{{ $career['jobType'] }}</span></div>
                                <div class="position-icon">
                                    <a href="{{ route('web.career', ['id' => $career['id']]) }}" class="btn btn-sm ">
                                        View Advert <i class="ti-arrow-top-right"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
            @if ($careers->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <p><small>Please submit a resume and cover letter with compensation history to
                                <b>{!! $settings->supportEmail !!}</b>.</small></p>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h3>There are no job openings at the moment. Please check again later</h3>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection
