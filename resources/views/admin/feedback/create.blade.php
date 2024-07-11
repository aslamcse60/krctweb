@extends('layouts.master')

@section('content')

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Feedback
                        <a href="{{ url('admin/feedback') }}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/feedback/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control"/>
                            @error('description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status (Check to hide)</label><br>
                            <input type="checkbox" name="status"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" ><i class="fa-regular fa-square-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
