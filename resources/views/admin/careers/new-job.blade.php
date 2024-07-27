@extends('layouts.backend')

@section('title')
    Add new Job
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Job Opening Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/careers/create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <label for="">Job Title</label>
                                    <input type="text" name="title" required class="form-control"
                                        placeholder="Job Title">
                                </div>
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" required class="form-control"></textarea>
                                </div>
                                <div class="mb-3 col-sm-12 col-md-6 col-xl-6">
                                    <label for="">Job Type</label>
                                    <input type="text" name="jobType" required class="form-control"
                                        placeholder="Job type i.e Part Time or Full time">
                                </div>
                                <div class="mb-3 col-sm-12 col-md-6 col-xl-6">
                                    <label for="">Job Period</label>
                                    <input type="text" name="period" required class="form-control"
                                        placeholder="Period like 2 Years" placeholder="Job Title">
                                </div>
                                <div class="mb-3 col-sm-12 col-md-6 col-xl-6">
                                    <label for="">Application Deadline</label>
                                    <input type="date" name="deadline" required class="form-control"
                                        placeholder="Job Title">
                                </div>
                                <div class="mb-3 col-sm-12 col-md-6 col-xl-6">
                                    <label for="">Open Positions</label>
                                    <input type="number" name="positions" required class="form-control"
                                        placeholder="Open positions i.e 1">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="">Responsibilities</label>
                                    <textarea name="responsibilities" id="responsibilities" cols="30" rows="10" required class="form-control"></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for=""> Location</label>
                                    <input type="text" name="location" required class="form-control">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for=""> File</label>
                                    <input type="file" name="career" required class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#4C5324; color:#fff">Upload
                                    Job Advert</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
