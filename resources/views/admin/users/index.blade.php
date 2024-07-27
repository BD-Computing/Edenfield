@extends('layouts.backend')
@section('title')
    Users
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
                <h3>Users</h3>
            </div>
            <table id="datatableDefault" class="table text-nowrap dataTable no-footer dtr-inline" role="grid"
                aria-describedby="datatableDefault_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending">User</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Position: activate to sort column ascending">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Age: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1" style="">{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('admin.users.show', ['user' => $user->id]) }}"
                                    class="btn btn-primary">View</a>
                                <a href="{{ route('admin.users.update-password-request', ['user' => $user->id]) }}"
                                    class="btn btn-secondary">Update
                                    Password</a>
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
