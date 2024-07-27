  <!-- Pricing -->
  <section class="pricing section-padding bg-blck" style="background-color: rgb(73, 68, 68)">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="section-subtitle"><span style="color: #fff">Best Prices</span></div>
                  <div class="section-title"><span>Extra Services</span></div>
                  <p class="color-2">Explore our hotel's array of extra services for an exceptional stay. Savor exquisite
                      cuisine in our restaurant, and host successful
                      events in our versatile meeting spaces.</p>
                  <p class="color-2"> Your comfort and convenience are our top priorities.</p>
                  <div class="reservations mb-30">
                      <div class="icon"><span class="flaticon-call"></span></div>
                      <div class="text">
                          <p class="color-2">For information</p> <a
                              href="tel:+{!! $settings->salesPhoneNumber !!}">+{!! $settings->salesPhoneNumber !!}</a>
                          <br>
                          <a href="tel:{!! $settings->phone !!}">{!! $settings->phone !!}</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-8">
                  <div class="owl-carousel owl-theme">
                      <div class="pricing-card">
                          <img src="{{ URL::asset('hotel/img/pricing/3.jpg') }}" alt="">
                          <div class="desc">
                              <div class="name">Room Breakfast</div>
                              {{-- <div class="amount">Ksh. 1300.00<span>/ daily</span></div> --}}
                              <ul class="list-unstyled list">
                                  <li><i class="ti-check"></i>Early and late options</li>
                                  <li><i class="ti-check"></i> Personalized experience</li>
                                  <li><i class="ti-check"></i>Fresh and delicious</li>
                              </ul>
                          </div>
                      </div>
                      <div class="pricing-card">
                          <img src="{{ URL::asset('hotel/img/pricing/5.jpg') }}" alt="">
                          <div class="desc">
                              <div class="name">Dinner</div>
                              {{-- <div class="amount">Ksh. 2500.00<span>/ daily</span></div> --}}
                              <ul class="list-unstyled list">
                                  <li><i class="ti-check"></i>Early and late options</li>
                                  <li><i class="ti-check"></i> Varied menu to suit preferences.</li>
                                  <li><i class="ti-check"></i>Premium ingredients
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
