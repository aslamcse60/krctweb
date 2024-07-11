@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Menu
                <a href="{{ url('admin/menu')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/menu')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
                    @error('link') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select class="form-control" required name="status">
                        <option>
                            Enabled
                        </option>
                        <option>
                            Disabled
                        </option>

                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-regular fa-square-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
