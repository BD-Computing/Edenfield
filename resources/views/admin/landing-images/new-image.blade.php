@extends('layouts.backend')

@section('title')
    Upload Landing Image
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Landing Images Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/landing-images/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" required class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Image</label>
                                <input type="file" name="image" required class="course form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#4C5324; color:#fff">Upload Image</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
