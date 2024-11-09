@extends('layouts.web')

@section('title')
    Coming Soon
@endsection
@section('content')
    <!-- Comming soon -->
    <section class="comming section-padding">
        <div class="v-middle">
            <div class="container">
                <div class="row text-center mb-30">
                    <div class="col-md-12">
                        <h2>Coming Soon!</h2>
                        <h6>Our website is under construction</h6>
                    </div>
                </div>
                <div class="row text-center mb-30">
                    <div class="col-6 offset-md-2 col-md-2">
                        <div class="item">
                            <div class="down">
                                <h3 id="days">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Days</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="item">
                            <div class="down">
                                <h3 id="hours">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Hours</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="item">
                            <div class="down">
                                <h3 id="minutes">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Minutes</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="item">
                            <div class="down">
                                <h3 id="seconds">00</h3>
                            </div>
                            <div class="item-info">
                                <h6 class="mb-0">Seconds</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="offset-md-3 col-md-6">
                        <p>Sign up for our latest news & articles.</p>
                        <form>
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="go-back col-md-12">
                        <a href="{{ route('homepage') }}"> <span><i class="ti-arrow-left"
                                    aria-hidden="true"></i></span>&nbsp; Back To Home </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
