@extends('layouts.backend')
@section('title')
    Food Menus
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
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <h3>Food Menus</h3>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6"
                        style="display: flex; align-items:center; justify-content: flex-end; ">
                        <a href="{{ route('admin.food-menus.create') }}" class="btn btn-primary" style="margin-right:20px;">Add
                            Menu</a>
                    </div>
                </div>
            </div>
            <table id="datatableDefault" class="table text-nowrap dataTable no-footer dtr-inline" role="grid"
                aria-describedby="datatableDefault_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatableDefault" rowspan="1"
                            colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending">Title</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Position: activate to sort column ascending">Description</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Age: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $key => $menu)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1" style="">{{ $key + 1 }}</td>
                            <td>{{ $menu->title }}</td>
                            <td>{{ $menu->description }}</td>
                            <td>
                                <a href="{{ route('admin.food-menus.show', ['id' => $menu->id]) }}"
                                    class="btn btn-sm btn-primary " style="width: max-content">
                                    View
                                </a>
                                <form method="post" action="{{ route('admin.food-menus.delete', ['id' => $menu->id]) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        style="background-color: red; color: #fff;  border-color: red; margin-top: 5px">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
