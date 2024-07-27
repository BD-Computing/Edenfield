@extends('layouts.backend')

@section('title')
    View Job
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h1>View Job</h1>
                <hr />
            </div>
            <div class="row">
                <div class="col-12 ">
                    <h1><span>Title: </span> {{ $career->title }}</h1>
                    <p><span>Description: </span>{{ $career->description }}</p>
                    <div class="col-md-12"
                        style="display: grid; grid-template-columns: 1fr 1fr; row-gap:20px; column-gap:20px;">
                        <div class="col-12">
                            <h6>Responsibilities</h6>
                            <p>{!! $career['responsibilities'] !!}</p>
                        </div>
                        <div class="col-12">
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
                    <a href="{{ URL::asset($career['file']) }}" class="btn view-career"
                        style="background-color: #4c5324; color: #fff" target="_blank">
                        View Job Advert
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
