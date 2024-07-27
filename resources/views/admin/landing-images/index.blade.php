@extends('layouts.backend')
@section('title')
    Landing Images
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
                <h3>Landing Images</h3>
            </div>
            <table id="datatableDefault" class="table text-nowrap dataTable no-footer dtr-inline" role="grid"
                aria-describedby="datatableDefault_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Name: activate to sort column ascending">Title</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Position: activate to sort column ascending">Description</th>
                        <th class="sorting" tabindex="0" aria-controls="datatableDefault" rowspan="1" colspan="1"
                            aria-label="Age: activate to sort column ascending">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $key => $image)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1" style="">{{ $key + 1 }}</td>
                            <td>{{ $image->title }}</td>
                            <td>{{ $image->description }}</td>
                            <td><a href="{{ route('admin.landing-images.show', ['id' => $image->id]) }}"
                                    class="btn btn-sm btn-primary " style="width: max-content">View</a>
                                <form method="post"
                                    action="{{ route('admin.landing-images.delete', ['id' => $image->id]) }}">
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
            {{-- <div class="col-lg-12 controls">
                {{ $images->links() }}
                <div class="right">
                    @if (count($images) > 0)
                        <p>Page {{ $images->currentPage() }} of
                            {{ (int) ceil($images->total() / $images->perPage()) }}</p>
                    @endif
                </div>
            </div> --}}
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
