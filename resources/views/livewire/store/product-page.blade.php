<div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="detail-slider-wrapper">
                        <div class="detail-page-slider-1 slick-initialized slick-slider">
                            <img role="presentation" alt="{{ $product->name }}" style="width: 500px"
                                src="{{ URL::asset($product->image) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-detail-wrapper">
                        <div class="shop-social-icons">
                            <a href="#" class="add-to-favorite" data-toggle="tooltip" title=""
                                data-original-title="Add to Wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <ul class="icon-box">
                                <li class="mt-0">
                                    <a href="#" data-toggle="tooltip" title=""
                                        data-original-title="Share on facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="mt-0">
                                    <a href="#" data-toggle="tooltip" title=""
                                        data-original-title="Share on twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="mt-0">
                                    <a href="#" data-toggle="tooltip" title=""
                                        data-original-title="Share on Linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-detail-title">
                            <h3 class="mb-0">{{ $product->name }}</h3>
                        </div>
                        <div class="rating d-flex">
                            <div class="acr-rating">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                            </div>
                            <span>2 reviews</span>
                        </div>
                        <div class="product-price-box">
                            <span class="product-price">@money($product->price)</span>
                        </div>
                        <div class="product-descr">
                            <p class="mb-0">
                                {!! $product->description !!}
                            </p>
                        </div>
                        <div class="product-variation-form">
                            <div class="shop-button-box">
                                <div class="qty-box">
                                    @if ($count > 1)
                                        <span class="qty-subtract">
                                            <button class="btn btn-sm">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                    @endif
                                    <input type="text" name="qty" value="1" wire:model="quantity">
                                    <input type="hidden" name="count" wire:model="count">
                                    <span class="qty-add">
                                        <button class="btn btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                                @auth()
                                    @if ($exists)
                                        <a href="{{ route('cart') }}" class=" btn-custom primary">View In
                                            Cart</a>
                                    @else
                                        <button wire:click.prevent="addToCart()" class=" btn-custom primary">Add to
                                            Cart</button>
                                    @endif
                                @else
                                    <a class="btn-custom secondary" href="{{ route('login') }}">Login to Place the
                                        Order</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-0">
        <div class="container">
            <div class="product-additional-info">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="nav product-sticky-sec" id="bordered-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill"
                                    href="#tab-product-desc" role="tab" aria-controls="tab-product-desc"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-product-info-tab" data-toggle="pill"
                                    href="#tab-product-info" role="tab" aria-controls="tab-product-info"
                                    aria-selected="false">Additional Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill"
                                    href="#tab-product-reviews" role="tab" aria-controls="tab-product-reviews"
                                    aria-selected="false">Reviews (25)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content" id="bordered-tabContent">
                            <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel"
                                aria-labelledby="tab-product-desc-tab">
                                <h4>Description</h4>
                                {!! $product->description !!}
                            </div>

                            <div class="tab-pane fade" id="tab-product-reviews" role="tabpanel"
                                aria-labelledby="tab-product-reviews-tab">
                                <div class="comment-form">
                                    <h4>Leave a Review</h4>
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="Full Name"
                                                    name="fname" value="">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control"
                                                    placeholder="Email Address" name="email" value="">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Your Message</label>
                                                <textarea class="form-control" placeholder="Type your comment..." name="comment" rows="7"></textarea>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="sendNotifications">
                                                    <label class="custom-control-label fw-400"
                                                        for="sendNotifications">Notify me when I receive a reply to my
                                                        comment</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-custom primary" name="button">Post
                                            Review</button>
                                    </form>
                                </div>
                                <div class="comments-list">
                                    <ul>
                                        <li class="comment-item">
                                            <img src="{{ asset('store/img/people/1.jpg') }}" alt="comment author">
                                            <div class="comment-body">
                                                <h5>Randy Blue</h5>
                                                <span>Posted on: January 13 2022</span>
                                                <p>Leverage agile frameworks to provide a robust synopsis for high level
                                                    overviews. Iterative approaches to corporate strategy foster
                                                    collaborative thinking to further the overall value proposition.</p>
                                                <a href="#" class="reply-link"> Reply </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
