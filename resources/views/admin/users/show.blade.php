@extends('layouts.backend')

@section('title')
    View User
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <h1 style="font-size: 20px">View User</h1>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <a href="{{ route('admin.users.update-password-request', ['user' => $user->id]) }}"
                        class="btn btn-secondary">Update
                        Password</a>
                </div>
                <div class="col-12 mt-4">
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <h1><span>Name: </span> {{ $user->name }}</h1>
                    <p><span>Email: </span>{{ $user->email }}</p>
                    <p><span>Phone: </span>
                        @if ($user->phone)
                            {{ $user->phone }}
                        @else
                            N/A
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
