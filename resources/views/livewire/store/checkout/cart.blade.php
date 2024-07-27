    <div class="section checkout-sec cart-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout-table">
                        <style>

                        </style>
                        <table style="width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Room Number</th>
                                    <th>Room Type</th>
                                    {{-- <th>Room Image</th> --}}
                                    {{-- <th>Room Description</th> --}}
                                    <th>Price Per Night</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Days</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data['items'] as $item)
                                    <tr>
                                        <td class="remove">
                                            <div class="product-remove">
                                                <a href="#" class="close-btn close-dark"
                                                    wire:click.prevent="removeFromCart({{ $item['id'] }})">
                                                    -
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td data-title="product-type">
                                            <div class="product-box">
                                                <div class="product-name">
                                                    <p>
                                                        <a href="#">{{ $item['name'] }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-title="product-type">
                                            <div class="product-box">
                                                <div class="product-name">
                                                    <p>
                                                        <a
                                                            href="#">{{ $item['associatedModel']['roomNumber'] }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td data-title="product-image">
                                            <div class="product-box">
                                                <img src="{{ URL::asset($item['associatedModel']['mainImage']) }}"
                                                    alt="product" style="width: 100px !important;">
                                            </div>
                                        </td> --}}
                                        {{-- <td data-title="product-type">
                                            <div class="product-box">
                                                <div class="product-name">
                                                    <p>
                                                        <a
                                                            href="#">{{ $item['associatedModel']['description'] }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td> --}}
                                        <td data-title="Price">
                                            <strong>@money($item['price'])</strong>
                                        </td>
                                        <td data-title="Check in">
                                            {!! $item['attributes']['checkIn'] !!}
                                        </td>
                                        <td data-title="Checkout">
                                            {!! $item['attributes']['checkOut'] !!}
                                        </td>
                                        <td data-title="Quantity">
                                            <p>{{ $item['quantity'] }}</p>
                                        </td>
                                        <td data-title="Total">
                                            <strong>@money($subtotals[$item['id']])</strong>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="coupen-code-wrapper mt-50" style="margin-top: 50px">
                        <h4>Discount Code</h4>
                        <div class="form-group">
                            <label>Enter coupon code</label>
                            <input type="text" class="form-control" placeholder="Coupon Code" name="coupen"
                                value="">
                        </div>
                        <button type="submit" class="btn-custom primary">Apply</button>
                    </div>
                </div>
                <div class="offset-xl-6 col-xl-6" style="width: 100% !important;">
                    <div class="cart-total checkout-table">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>@money($data['subTotal'])</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>
                                        <strong>@money($data['total'])</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="butn-dark col-sm-12">
                        <a href="{{ route('client.checkout') }}">
                            <span>
                                Proceed to Checkout
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
