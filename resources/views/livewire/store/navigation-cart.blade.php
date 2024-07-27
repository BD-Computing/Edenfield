@if ($count > 0)
    <a href="{{ route('cart') }}" id="cart">
        <div class="cart-group">
            <i class="fa fa-shopping-cart"></i>
            <span class="badge">{{ $count }}</span>
        </div>
    </a>
    </li>
@endif


{{-- <li class="dropdown-btn">
    <a href="#">
        <i class="fal fa-shopping-cart"></i>
        <p>{{ $count }}</p>
    </a>
    <div class="dropdown-menu cart-dropdown-menu">
        @if ($items)
            @foreach ($items['items'] as $index => $item)
                <ul class="cart-items-box">
                    <li class="cart-item">
                        <div class="img">
                            <img src="{{ URL::asset($item['associatedModel']['mainImage']) }}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="#">{{ $item['associatedModel']['roomType'] }}</a></h5>
                            <p> @money($item['price']) x {{ $item['quantity'] }}</p>
                        </div>
                    </li>
                </ul>
            @endforeach

            <div class="cart-items-box">
                <div class="cart-item">
                    <span>Subtotal</span>
                    <span> @money($items['subTotal'])</span>
                </div>
                <div class="cart-item actions">
                    <a href="{{ route('client.checkout') }}" class="btn-custom btn-sm secondary mr-2">Checkout</a>
                    <a href="{{ route('cart') }}" class="btn-custom btn-sm primary">View
                        Cart</a>
                </div>
            </div>
        @endif
    </div>
</li> --}}

{{-- <div class="cart-container">
    <div class="shopping-cart">
        <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
            <div class="shopping-cart-total">
                <span class="lighter-text">Total:</span>
                <span class="main-color-text">$2,229.97</span>
            </div>
        </div> <!--end shopping-cart-header -->

        <ul class="shopping-cart-items">
            <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                <span class="item-name">Sony DSC-RX100M III</span>
                <span class="item-price">$849.99</span>
                <span class="item-quantity">Quantity: 01</span>
            </li>

            <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
                <span class="item-name">KS Automatic Mechanic...</span>
                <span class="item-price">$1,249.99</span>
                <span class="item-quantity">Quantity: 01</span>
            </li>

            <li class="clearfix">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
                <span class="item-name">Kindle, 6" Glare-Free To...</span>
                <span class="item-price">$129.99</span>
                <span class="item-quantity">Quantity: 01</span>
            </li>
        </ul>

        <a href="#" class="button">Checkout</a>
    </div> <!--end shopping-cart -->
</div> <!--end container --> --}}
