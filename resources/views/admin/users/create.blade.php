@extends('layouts.backend')

@section('title')
    Register a new User
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Register User</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.users.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-xl-6">
                                    <div class="mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="email" required class="form-control"
                                            placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xl-6">
                                    <div class="mb-3">
                                        <label for=""> Phone</label>
                                        <input type="tel" name="phone" required class="form-control"
                                            placeholder="Enter the phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-12">
                                <div class="mb-3">
                                    <label for=""> Password</label>
                                    <input type="text" name="password" required class="form-control"
                                        placeholder="Enter the Password like ***********">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="background: #4C5324">Register</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
