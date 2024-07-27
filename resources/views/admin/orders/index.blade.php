@extends('layouts.backend')
@section('title')
    Orders
@endsection
@section('content')
    <style>
        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Orders</h3>
                <hr>
            </div>
            <table id="datatableDefault" class="table text-nowrap dataTable no-footer dtr-inline" role="grid"
                aria-describedby="datatableDefault_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending">Client</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Position: activate to sort column ascending">Amount</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Office: activate to sort column ascending">Delivery Address</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Age: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1" style="">{{ $key + 1 }}</td>
                            <td>Tiger Nixon</td>
                            <td>@money($order->totalAmount)</td>
                            <td>Edinburgh</td>
                            <td><a href="{{ route('admin.orders.show', ['id' => $order->id]) }}">View</a></td>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
@endsection
