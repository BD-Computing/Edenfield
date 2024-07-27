@extends('layouts.backend')

@section('title')
    Upload Menu
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Menu Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/food-menus/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" required class="form-control" placeholder="Menu Title">
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" required class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Menu</label>
                                <input type="file" name="menu" required class="course form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="background-color:#4C5324">Upload
                                    Menu</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
