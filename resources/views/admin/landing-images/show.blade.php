@extends('layouts.backend')

@section('title')
    Show Landing Image
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h1>View Landing Image</h1>
                <hr />
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <h1><span>Title: </span> {{ $image->title }}</h1>
                    <p><span>Description: </span>{{ $image->description }}</p>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <h4 class="mb-10">Image</h4>
                    <img src="{{ url($image['imageLink']) }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
@endsection
