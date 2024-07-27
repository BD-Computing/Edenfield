<div>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ URL::asset('hotel/img/rooms/21.jpg') }}" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                @foreach ($testimonials as $testimonial)
                                    <div class="item">
                                        <span class="quote"><img src="{{ URL::asset('hotel/img/quot.png') }}"
                                                alt=""></span>
                                        <p>{!! $testimonial->message !!}</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="{{ URL::asset('hotel/img/avatar.png') }}"
                                                    alt=""> </div>
                                            <div class="cont">
                                                <span>
                                                    @for ($i = 0; $i < $testimonial->stars; $i++)
                                                        <i class="star-rating"></i>
                                                    @endfor
                                                </span>
                                                <h6>{{ $testimonial->name }}</h6>
                                                <span>Guest review</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
