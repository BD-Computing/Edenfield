@extends('layouts.backend')

@section('title')
    View Menu
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h1>View Menu</h1>
                <hr />
            </div>
            <div class="row">
                <div class="col-12 ">
                    <h1><span>Title: </span> {{ $menu->title }}</h1>
                    <p><span>Description: </span>{{ $menu->description }}</p>
                    <a href="{{ URL::asset($menu['menuLink']) }}" class="btn view-menu"
                        style="background-color: #4c5324; color: #fff" target="_blank">
                        View Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
