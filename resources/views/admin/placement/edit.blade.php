@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Placement
                <a href="{{ url('admin/placement')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/placement/'.$placement->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$placement->name}}" class="form-control">
                    @error('name') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{asset("$placement->image")}}" style="width:80px;height:80px" alt="Placement">
                    @error('image') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Department (Ex: CSE - 2022)</label>
                    <input type="text" name="department" value="{{$placement->department}}" class="form-control">
                    @error('department') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Company</label>
                    <input type="text" name="company" value="{{$placement->company}}" class="form-control">
                    @error('company') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" {{$placement->status=='1' ? 'checked':''}} style="width:25px;height:25px">
                    Checked=Hidden,Unchecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
