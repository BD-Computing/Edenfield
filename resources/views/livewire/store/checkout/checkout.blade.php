<div>



    <div class="section checkout-sec">
        <style>
            .address {
                padding: 10px 0 0 5px;
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                gap: 30px;
                cursor: pointer;
            }

            .address h2 {
                padding: 0 0 0 20px;
            }

            .addAddress {
                cursor: pointer;
                text-align: right;
                border: 1px solid black;
                padding: 5px;
                border-radius: 5px;
                width: max-content;
                float: right;
            }

            .checkout-form {
                margin-bottom: 20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="checkout-form">
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <h6>Use Existing Addresses</h6>
                            </div>
                            <div class="col-xl-6 form-group">
                                <h6 wire:click.prevent="addNewAddress()" class="addAddress">Add New Addresses</h6>
                            </div>
                            @if ($addresses)
                                @foreach ($addresses as $index => $address)
                                    <div class="col-xl-12 form-group address"
                                        wire:click.prevent="selectAddress({{ $address->id }})"
                                        @if ($address->id === $currentAddress) style="background-color: green; color: #fff;" @endif>
                                        <h2 @if ($address->id === $currentAddress) style="color: #fff;" @endif>
                                            {{ $index + 1 }}</h2>
                                        <p @if ($address->id === $currentAddress) style="color: #fff;" @endif>
                                            Address: {{ $address->firstName }} {{ $address->lastName }} <br>
                                            @if (is_null($address->businessName))
                                                {{ $address->businessName }} <br>
                                            @endif
                                            {{ $address->streetAddress }} <br>
                                            {{ $address->phoneNumber }} | {{ $address->email }}
                                        </p>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-xl-12 form-group">
                                    <p>There are no Addresses. Add a new One below</p>
                                </div>
                            @endif
                        </div>
                        @if ($addNewAddress)
                            <div class="row">
                                <div class="col-xl-12 form-group">
                                    <h6>Add New Addresses</h6>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label>First Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="First Name" name="firstName"
                                        wire:model="firstName" value="">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label>Last Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastName"
                                        wire:model="lastName" value="">
                                </div>
                                <div class="col-xl-12 form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" placeholder="Company Name (Optional)"
                                        name="businessName" value="" wire:model="businessName">
                                </div>

                                <div class="col-xl-12 form-group">
                                    <label>Street Address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Street Address"
                                        name="streetAddress" value="" required wire:model="streetAddress">
                                </div>
                                <div class="col-xl-12 form-group">
                                    <label>City
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="City" name="city"
                                        value="" required="" wire:model="city">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label>Phone Number
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" class="form-control" placeholder="Phone Number"
                                        name="phoneNumber" value="" wire:model="phoneNumber">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label>Email Address
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" placeholder="Email Address"
                                        name="email" value="" required="" wire:model="email">
                                </div>
                                <div class="col-xl-12 mb-0 form-group">
                                    <label>Your Message</label>
                                    <textarea class="form-control" placeholder="Type your message..." name="comment" rows="7" wire:model="comment"></textarea>
                                </div>
                                <div class="col-xl-12 form-group">
                                    <button wire:click.prevent="postAddress()" class="btn-custom primary btn-block"
                                        style="background-color: rgb(7, 225, 7); margin-top: 20px;">Post and Use
                                        this address</button>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="checkout-table space-top">
                                    <table style="width: 100% !important;">
                                        <thead>
                                            <tr>
                                                <th>Room</th>
                                                <th>Days</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($order)
                                                @foreach ($order['items'] as $item)
                                                    <tr>
                                                        <td data-title="product">
                                                            <div class="product-name">
                                                                <h6>
                                                                    <a
                                                                        href="#">{{ $item['associatedModel']['roomType'] }}</a>
                                                                </h6>
                                                                <p>{{ $item['associatedModel']['description'] }}</p>
                                                            </div>
                                                        </td>
                                                        <td data-title="Quantity">x{{ $item['quantity'] }}</td>
                                                        <td data-title="Total">
                                                            <strong>
                                                                @php
                                                                    $subTotal = $item['price'] * $item['quantity'];
                                                                @endphp
                                                                @money($subTotal)
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="total">
                                                    <td>
                                                        <h6 class="mb-0">Total</h6>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <strong>@money($order['total'])</strong>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ($currentAddress)
                                <div class="col-xl-12">
                                    <p class="small">
                                        Your personal data will be used to process your order, support your experience
                                        throughout this website, and for other purposes described in our
                                        <a href="#" class="btn-link">Privacy Policy</a>
                                    </p>
                                    <button wire:click.prevent="completeOrder()" class="btn-custom primary btn-block"
                                        style="background-color: green">Post Order</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
