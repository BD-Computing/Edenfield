@extends('layouts.backend')
@section('title')
    Careers
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
                        <h3>Careers</h3>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6"
                        style="display: flex; align-items:center; justify-content: flex-end; ">
                        <a href="{{ route('admin.careers.create') }}" class="btn btn-primary" style="margin-right:20px;">
                            Add Opening
                        </a>
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
                            aria-label="Position: activate to sort column ascending">Deadline</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Age: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $key => $job)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1" style="">{{ $key + 1 }}</td>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->deadline }}</td>
                            <td>
                                <a href="{{ route('admin.careers.show', ['id' => $job->id]) }}"
                                    class="btn btn-sm btn-primary " style="width: max-content">
                                    View
                                </a>
                                <form method="post" action="{{ route('admin.careers.delete', ['id' => $job->id]) }}">
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
