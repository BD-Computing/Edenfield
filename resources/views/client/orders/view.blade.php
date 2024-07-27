@extends('client.client-dashboard')
@section('title')
    View Order
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/invoice.css') }}">
@endsection
@section('app-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="acr-welcome-message">
                <h3>Orders #{{ $order->id }}</h3>
                <p>Below is an invoice for an order you have placed in the platform</p>
            </div>
        </div>
    </div>
    <div class="row">
        <section class="invoice">
            <div id="invoiceholder">
                <div id="invoice" class="effect2">

                    <div id="invoice-top">
                        <div class="logo"><img src="{{ URL::asset('hotel/img/logo-dark.png') }}" alt="Logo" /></div>
                        <div class="title">
                            <h1>Invoice #<span class="invoiceVal invoice_num">{{ $order->id }}</span></h1>
                            <p>Invoice Date: <span
                                    id="invoice_date">{{ Carbon\Carbon::parse($order->createdAt)->toDayDateTimeString() }}</span><br>
                                {{-- GL Date: <span id="gl_date">23 Feb 2018</span> --}}
                            </p>
                        </div><!--End Title-->
                    </div><!--End InvoiceTop-->



                    <div id="invoice-mid">
                        <div id="message">
                            <h2>Hello {{ auth()->user()->name }},</h2>
                            <p>An invoice with invoice number #<span id="invoice_num">{{ $order->id }}</span> is created
                                for you.
                            </p>
                        </div>
                        {{-- <div class="cta-group mobile-btn-group">
                            <a href="javascript:void(0);" class="btn-primary">Approve</a>
                            <a href="javascript:void(0);" class="btn-default">Reject</a>
                        </div> --}}
                        <div class="clearfix">
                            <div class="col-left">
                                <div class="clientlogo"><img
                                        src="https://cdn3.iconfinder.com/data/icons/daily-sales/512/Sale-card-address-512.png"
                                        alt="Sup" /></div>
                                <div class="clientinfo">
                                    <h2 id="supplier">{{ $settings->companyName }}</h2>
                                    <p><span id="address">{{ $settings->officeAddress }},</span><br><span id="city">
                                            {{ $settings->town }} - {{ $settings->country }}
                                        </span><br><span id="country">{{ $settings->boxAddress }}</span> -
                                        <span id="zip">{{ $settings->code }}</span><br><span
                                            id="tax_num">{{ $settings->phone }}</span><br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-right">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><span>Invoice Total</span><label
                                                    id="invoice_total">@money($order->totalAmount)</label></td>
                                            <td><span>Currency</span><label id="currency">KES</label></td>
                                        </tr>
                                        <tr>
                                            <td><span>Paid Amount</span><label id="payment_term">@money($order->paidAmount)</label>
                                            </td>
                                            <td><span>Balance</span><label id="invoice_type">@money($order->balance)</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span>Note</span>#<label id="note">None</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--End Invoice Mid-->

                    <div id="invoice-bot">

                        <div id="table">
                            <table class="table-main">
                                <thead>
                                    <tr class="tabletitle">
                                        <th>Type</th>
                                        {{-- <th>Description</th> --}}
                                        <th>Days</th>
                                        <th>Check In</th>
                                        <th>Checkout</th>
                                        <th>Rate</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                @foreach ($items as $item)
                                    <tr class="list-item">
                                        <td data-label="Type" class="tableitem">{{ $item->roomNumber }}</td>
                                        {{-- <td data-label="Description" class="tableitem">
                                            {{ $item->description }}
                                        </td> --}}
                                        <td data-label="Quantity" class="tableitem">{{ $item->quantity }}</td>
                                        <td data-label="Unit Price" class="tableitem">{{ $item->checkInDate }}</td>
                                        <td data-label="Unit Price" class="tableitem">{{ $item->checkOutDate }}</td>
                                        <td data-label="Taxable Amount" class="tableitem">@money($item->rate)</td>
                                        <td data-label="Total" class="tableitem">@money($item->rate * $item->quantity)</td>
                                    </tr>
                                @endforeach

                                <tr class="list-item total-row">
                                    <th colspan="5" class="tableitem">Grand Total</th>
                                    <td data-label="Grand Total" class="tableitem">@money($order->totalAmount)</td>
                                </tr>
                            </table>
                        </div><!--End Table-->
                        <div class="cta-group mt-50">
                            @if ($order->pendingAmount > 0)
                                <a href="{{ route('client.payment', ['id' => $order->id]) }}" class="btn-primary">Pay
                                    Invoice</a>
                            @endif
                        </div>

                    </div><!--End InvoiceBot-->
                    <footer class="invoice">
                        <div id="legalcopy" class="clearfix">
                            <p class="col-right">Our mailing address is:
                                <span class="email"><a
                                        href="mailto:{{ $settings->salesEmail }}">{{ $settings->salesEmail }}</a></span>
                            </p>
                        </div>
                    </footer>
                    {{-- </div><!--End Invoice--> --}}
                </div><!-- End Invoice Holder-->
        </section>
    </div>
@endsection
