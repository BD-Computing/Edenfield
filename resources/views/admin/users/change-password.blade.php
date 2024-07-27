@extends('layouts.backend')

@section('title')
    Update Password
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update User Password</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.users.update-password', ['user' => $id]) }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-xl-6">
                                    <div class="mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" required class="form-control"
                                            placeholder="Enter new Password">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xl-6">
                                    <div class="mb-3">
                                        <label for=""> Confirm Password</label>
                                        <input type="password" name="password_confirmation" required class="form-control"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="background: #4C5324">
                                    Change Password
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
