@extends('layouts.master')
@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Chairman Details
                <a href="{{ url('admin/administration/chairman/')}}" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/administration/chairman/'.$chairman->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$chairman->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"><br>
                    <img src="{{asset("$chairman->image")}}" style="width:80px;height:80px" alt="cards">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" id="mysummernote" class="form-control">{{$chairman->description}}</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
