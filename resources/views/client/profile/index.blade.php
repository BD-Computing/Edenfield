@extends('client.client-dashboard')
@section('title')
    Profile
@endsection
@section('app-content')
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="acr-welcome-message">
                        <h3>Welcome Back, {{ auth()->user()->name }}</h3>
                    </div>

                    <form method="post">
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="example@example.com"
                                    value="{{ auth()->user()->email }}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="+123 456 789"
                                    value="{{ auth()->user()->phone }}">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn-custom">Save Changes</button>
                    </form>
                    <hr>

                    <div class="acr-welcome-message">
                        <h3>Security</h3>
                        <p>Change your password using the form below</p>
                    </div>

                    <form method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" value="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control" placeholder="Repeat Password" value="">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn-custom">Save Changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
