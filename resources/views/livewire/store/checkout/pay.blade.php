<div class="section checkout-sec">
    <style>
        .main-title {
            text-transform: uppercase;
            text-align: start;
        }

        .amount {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;
        }

        .amount h1 {
            padding: 30px;
            font-weight: 900;
            text-align: center;
            border: 3px dashed black;
        }

        .amount h1 span {
            color: #C54E26;
        }

        .error {
            text-align: center;
        }

        .icon {
            max-width: 60px;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .option {
            padding: 0;
            margin: 0;
        }

        .title {
            display: flex;
            /* gap: 40px; */
            align-items: flex-start;
            flex-direction: column;
        }
    </style>
    <div class="container">
        @if ($order && $order->totalAmount > 0)
            <div class="row ">
                <div class="col-xl-12 amount">
                    <h1>Amount to Pay: <br><span>@money($order->totalAmount)</span></h1>
                </div>
            </div>
            <div class="row">
                <h1 class="main-title">Order Payments</h1>
                <div class="col-xl-12 space-top">
                    <div class="row ">
                        <div class="col-xl-12 form-group title">
                            <img src="{{ URL::asset('/images/mpesa-logo.png') }}" alt="Mpesa Logo" height="10px"
                                class="icon"> <br>
                            <h4 class="option">Lipa na Mpesa STK Push</h4>
                        </div>
                        <div class="col-xl-12 form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Like 254725270930" name="phone"
                                wire:model="msisdn" value="">
                        </div>
                        <div class="col-xl-12">
                            <p class="small">
                                Your personal data will be used to process your order, support your experience
                                throughout this website, and for other purposes described in our
                                <a href="#" class="btn-link">Privacy Policy</a>
                            </p>
                            @if ($alert)
                                <p class="small">
                                    {{ $alert }}
                                </p>
                            @endif
                            <button wire:click.prevent="initiatePayment()" class="btn-custom primary btn-block"
                                style="background-color: green"
                                @if ($alert || is_null($msisdn)) disabled style="background-color: rgb(222, 7, 0) !important;" @endif>
                                @if ($alert)
                                    Payment Initiated. Enter Mpesa PIN to complete Order
                                @else
                                    Initiate Mpesa Payment Via STK
                                @endif
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-xl-12">
                    <p class="error">There was no order selected. Try again!</p>
                </div>
            </div>
        @endif

    </div>
</div>
