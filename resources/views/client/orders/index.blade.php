@extends('client.client-dashboard')
@section('title')
    Bookings
@endsection
@section('app-content')
    <style>
        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .custom-btn {
            background-color: #4C5324;
            color: #fff !important;
            border: none;
            padding: 5px 10px;
        }

        .custom-btn.primary:hover {
            background-color: #C98A41;
            border-radius: 5px;
        }
    </style>

    <div class="row">
        <div class="col-lg-12">
            <div class="acr-welcome-message">
                <h3>My Orders</h3>
                <p>Below are all the orders you have placed in the platform</p>
            </div>
            <div class="checkout-table">
                <table class="mb-0" style="width: 100% !important;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Amount</th>
                            <th>Order Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => &$order)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td data-title="Order-id">ORDER#: {{ $order->id }}</td>
                                <td data-title="amount">@money($order->totalAmount)</td>
                                <td data-title="Order-date">
                                    {{ Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}
                                </td>
                                <td data-title="Actions">
                                    <a href="{{ route('client.orders.view', ['id' => $order->id]) }}"
                                        class="custom-btn primary">View Order</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-lg-12 controls">
                    {{ $orders->links() }}
                    <div class="right">
                        @if (count($orders) > 0)
                            <p>Page {{ $orders->currentPage() }} of
                                {{ (int) ceil($orders->total() / $orders->perPage()) }}</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
